<?php

namespace resutoran\backend\controllers;

use Yii;
use \yii\base\Exception;

use \resutoran\common\models\ResuLocationContact;

/**
 * ResuLocationController implements the CRUD actions for ResuLocation model.
 */
class ResuLocationNewProcessController extends ResuLocationController
{
    /**
     * @var string
     */
    //protected $model = null; // extends from ResuLocationCNTL's properties

    /**
     * @return string
     */
    public function actionCreate()
    {
        $model = new $this->model();

        if (Yii::$app->request->isPost === true) {

            $data =  Yii::$app->request->post();

            if ($model->load($data) && $model->save()) {

                // TODO use url module?
                return \Yii::$app->response->redirect('add-additional-option?id=' . $model->id);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ResuAmbianceOption model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return \Yii::$app->response->redirect('add-additional-option?id=' . $model->id);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    // from here on the additional data points are stepped through alphabetically

    /**
     * @todo break this into two steps
     *
     * @param $id integer
     *
     * @return string
     */
    public function actionAddAdditionalOption($id)
    {
        $model = \resutoran\common\models\ResuLocation::findOne($id);

        if (Yii::$app->request->isPost === true) {

            $saveStatus  = $this->saveResuLocDressOption(
                $id,
                (\Yii::$app->request->post()['ResuLocation']['location_options']['resu_location_dress_code'] ?? null)
            );

            $saveStatus2 = $this->saveBooleanOptionValues(
                $id,
                (\Yii::$app->request->post()['ResuLocation']['resu_location_boolean'] ?? null)
            );

            if ($saveStatus === true && $saveStatus2 === true) {
                return \Yii::$app->response->redirect('add-contact?id=' . $id);
            }
        }

        return $this->render('addAdditionalOption', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     *
     * @return string
     */
    public function actionAddContact($id)
    {
        // null coalesce model creation. If exists use, if does not exists create empty model AR.
        $model = ResuLocationContact::findOne(['resu_location_id' => $id]) ?? new ResuLocationContact();

        if (Yii::$app->request->isPost === true) {

            if ($model->load(Yii::$app->request->getBodyParams()) && $model->save()) {
                return \Yii::$app->response->redirect('add-hour?id=' . $id);
            }
        }

        return $this->render('addContact', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     *
     * @return string
     */
    public function actionAddHour($id)
    {
        $model = \resutoran\common\models\ResuLocationHour::findAll(['resu_location_id' => $id]);

        if (Yii::$app->request->isPost === true) {
            if ($this->saveHoursValues($id, Yii::$app->request->post()['ResuLocationHour'])) {
                return \Yii::$app->response->redirect('add-price?id=' . $id);
            }
        }

        return $this->render('addHour', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     *
     * @return string
     */
    public function actionAddPrice($id)
    {
        $model = \resutoran\common\models\ResuLocationPrice::findAll(['resu_location_id' => $id]);

        if (Yii::$app->request->isPost === true) {

            $data = Yii::$app->request->post();
            $saveStatus = $this->savePriceAmountValues($id, $data['ResuLocation']['resu_location_price']);

            //if ($model->load($data) && $model->save()) {
            if ($saveStatus === true) {
                return \Yii::$app->response->redirect('add-option?id=' . $id);
            }
        }

        return $this->render('addPrice', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     *
     * @return string
     */
    public function actionAddOption($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost === true) {

            $data = Yii::$app->request->post();

            if ($model->load($data) && $model->save()) {
                return \Yii::$app->response->redirect('../resu-location-new-process');
            }
        }

        return $this->render('addOption', [
            'model' => $model,
        ]);
    }

    // private methods

    /**
     * @param $resuLocationId integer
     * @param $data array
     *
     * @return boolean
     */
    private function savePriceAmountValues($resuLocationId, $data)
    {
        $returnData = false;

        $model = \resutoran\common\models\ResuLocationPrice::findOne(['resu_location_id' => $resuLocationId]);

        if ($model === null) {
            $model = new \resutoran\common\models\ResuLocationPrice();
        }

        $model->setAttributes([
            'resu_location_id' => $resuLocationId,
            'low' => $data['low'] ?? null,
            'high' => $data['high'] ?? null,
        ]);

        if (!$model->save()) {
            Yii::error($model->getErrors(), 'warning');
            throw new \Error('Unable to save Location Price change.');
        }

        return true;
    }

    /**
     * We are only adding or remove a resu location {option} values.
     *
     * @param       $id
     * @param array $data
     *
     * @return bool
     * @throws \Error
     */
    private function saveResuLocDressOption(string $id = null, array $data = null)
    {
        // if ID provided, but not data, update all items with delete data
        if ($id !== null && $data === null) {
            // Customer::updateAll(['status' => 1], 'status = 2');
            \resutoran\common\models\ResuLocationDressCode::updateAll([
                    'resu_location_id' => $id
                ],
                'deleted_at = ' . time() . ' AND updated_by = ' . \Yii::$app->user->getId()
            );

            return true;
        } elseif ($id !== null && $data !== null) {

            // simplify data array
            foreach ($data as $key => $value) {
                $data[$key] = (int)$value;
            }

            // get location dress code options currently active in the database
            $inDB = \resutoran\common\models\ResuLocationDressCode::find()
                ->select(['resu_location_id', 'resu_dress_code_option_id'])
                ->andwhere(['resu_location_id' => (int)$id])
                ->asArray()
                ->all();

            // simplify data that came from the database
            foreach ($inDB as $key => $value) {
                $inDB[$key] = (int)$value['resu_dress_code_option_id'];
            }

            // if the item is in the array but not in the DB, add it to the DB
            foreach ($data as $key => $value) {

                // if the item is in the array but not in the DB, add it to the DB
                if (!in_array($value, $inDB)) {
                    // if in data AND NOT in DB: add to DB
                    $newItem = new \resutoran\common\models\ResuLocationDressCode([
                        'resu_location_id'          => $id,
                        'resu_dress_code_option_id' => $value
                    ]);

                    if (!$newItem->save()) {
                        Yii::error($newItem->getFirstErrors(), 'warning');
                        throw new \Error('Unable to save new Location Dress Code Option.');
                    }
                }
            }

            // if the item is in the DB, but not in the array, mark item as delete it
            foreach ($inDB as $key => $value) {

                // if the item is in the array but not in the DB, add it to the DB
                if (!in_array($value, $data)) {
                    // if in DB AND NOT in data: mark as deleted in DB
                    $delItem = \resutoran\common\models\ResuLocationDressCode::findOne([
                        'resu_location_id'          => $id,
                        'resu_dress_code_option_id' => $value
                    ]);

                    $delItem->setAttribute('deleted_at', time());

                    if (!$delItem->save()) {
                        Yii::error($delItem->getErrors(), 'warning');
                        throw new \Error('Unable to deleted old Location Dress Code Option.');
                    }
                }
            }

            return true;
        }

        return false;
    }

    /**
     * @param string|null $id
     * @param array|null  $data
     *
     * @return bool
     * @throws \Error
     */
    private function saveBooleanOptionValues(string $id = null, array $data = null)
    {
        foreach ($data as $key => $value) {
            $value = (integer)$value;

            $model = \resutoran\common\models\ResuLocationBoolean::findOne([
                'resu_location_id' => $id,
                'resu_boolean_option_id' => \resutoran\common\models\ResuBooleanOption::find()
                    ->andWhere(['value' => $key])
                    ->one()
                    ->id
            ]);

            if (!empty($model) && isset($model->id) && $value === 0) {
                // data found, new value 0
                $model->setAttributes([
                    'updated_by' => \Yii::$app->user->getId(),
                    'deleted_at' => time()
                ]);
            } elseif (!empty($model) && $value === 1) {
                // mode data found, new value
                $model->setAttributes([
                    'updated_by' => \Yii::$app->user->getId(),
                    'updated_at' => time(),
                    'deleted_at' => null
                ]);
            } elseif (empty($model) && $value === 1) {
                // model data not found, new value 1
                $model = new \resutoran\common\models\ResuLocationBoolean([
                    'resu_location_id'       => $id,
                    'resu_boolean_option_id' => \resutoran\common\models\ResuBooleanOption::find()
                        ->andWhere(['value' => $key])
                        ->one()
                        ->id
                ]);
            }

            if ($model) {
                if (!$model->save()) {
                    Yii::error($model->getErrors(), 'warning');
                    throw new \Error('Unable to deleted old Location Dress Code Option.');
                }
            }
        }

        return true;
    }

    /**
     * @param string|null $id
     * @param array|null  $data
     *
     * @return bool
     * @throws \Error
     */
    private function saveHoursValues(string $id = null, array $data = null)
    {
        foreach ($data as $timeKey => $timeValue) {

            // get location dress code options currently active in the database
            $model = \resutoran\common\models\ResuLocationHour::find()
                ->andwhere([
                    'resu_location_id'  => (int)$id,
                    'resu_day_option_id'=> (int)$timeKey,
                ])
                ->one();

            if (empty($model)) {
                // data not found in DB, create a new record
                $model = new \resutoran\common\models\ResuLocationHour([
                    'resu_location_id'  => (int)$id,
                    'resu_day_option_id'=> (int)$timeKey,
                    'open'              => !empty($timeValue['open']) ? $timeValue['open'] : null,
                    'close'             => !empty($timeValue['close']) ? $timeValue['close'] : null,
                    'created_by'        => \Yii::$app->user->getId()
                ]);

                if (!$model->save()) {
                    Yii::error($model->getErrors(), 'warning');
                    throw new \Error('Unable to add location hours.');
                }
            } else {
                // data found in DB, update
                if ($model->open !== $timeValue['open'] || $model->close !== $timeValue['close']) {
                    // but only if $data[open] or $data[close] does not match what is already in the DB

                    $model->setAttributes([
                        'open'  => (!empty($timeValue['open']) ? $timeValue['open'] : null),
                        'close' => (!empty($timeValue['close']) ? $timeValue['close'] : null),
                    ]);

                    if (!$model->save()) {
                        Yii::error($model->getErrors(), 'warning');
                        throw new \Error('Unable to update location hours.');
                    }
                }
            }
        }

        return true;
    }
}
