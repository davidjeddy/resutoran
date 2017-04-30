<?php

namespace resutoran\backend\controllers;

use Yii;
use \yii\base\Exception;

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

            $returnData = new \yii\db\ActiveRecord();

            if ($returnData->hasErrors() === false
                && !empty($seatingOptions = \Yii::$app->request->post()['ResuLocation']['location_options']['resu_location_seating'])
            ) {
                $returnData = $this->saveResuLocDressOption($id, $seatingOptions);
            }

            //$saveStatus  = $this->saveResuLocDressOption($id, \Yii::$app->request->post());
            //$saveStatus2 = $this->saveBooleanOptionValues($id, \Yii::$app->request->post());

            echo '<pre>';
            echo \yii\helpers\VarDumper::dump($returnData, 10, true);
            echo '</pre>';
            exit(1);

            //if ($model->load($data) && $model->save()) {
            if ($saveStatus === true) {
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
        $model = \resutoran\common\models\ResuLocationContact::findOne(['resu_location_id' => $id]);

        if (Yii::$app->request->isPost === true) {

            $data = Yii::$app->request->post();
            $data['ResuLocationContact']['resu_location_id'] = $id;

            if ($model->load($data) && $model->save()) {
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

            $data = Yii::$app->request->post();
            $saveStatus = $this->saveHoursValues($id, $data);

            //if ($model->load($data) && $model->save()) {
            if ($saveStatus === true) {
                return \Yii::$app->response->redirect('add-menu?id=' . $id);
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
    public function actionAddMenu($id)
    {
        $model = \resutoran\common\models\ResuLocationMenu::findAll(['resu_location_id' => $id]);

        if (Yii::$app->request->isPost === true) {

            $data = Yii::$app->request->post();
            $saveStatus = $this->saveMenuAmountValues($id, $data['ResuLocation']['resu_location_menu']);

            //if ($model->load($data) && $model->save()) {
            if ($saveStatus === true) {
                return \Yii::$app->response->redirect('add-option?id=' . $id);
            }
        }

        return $this->render('addMenu', [
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
                return \Yii::$app->response->redirect('../resu-location');
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
    private function saveMenuAmountValues($resuLocationId, $data)
    {
        $returnData = false;

        foreach ($data as $key => $menuAmountValue) {
            // find record
            $resuLocMenuMDL = \resutoran\common\models\ResuLocationMenu::find()
                ->andWhere([
                    'resu_location_id'      => $resuLocationId,
                    'resu_menu_option_id'   => $key
                ])
                ->one();

            // or create AR
            if ($resuLocMenuMDL === null) {
                $resuLocMenuMDL = new \resutoran\common\models\ResuLocationMenu();
                $resuLocMenuMDL->setAttributes([
                    'resu_location_id'=> $menuAmountValue['high_price'] ?: null,
                    '' => $menuAmountValue['low_price'] ?: null,
                ]);
            }

            // populate values
            $resuLocMenuMDL->setAttributes([
                'high_price'=> $menuAmountValue['high_price'] ?: null,
                'low_price' => $menuAmountValue['low_price'] ?: null,
            ]);

            // save model
            if ($resuLocMenuMDL->save()) {
                $returnData = true;
            } else {
                $returnData = $resuLocMenuMDL->getErrors();
                continue 1;
            }
        }

        return $returnData;
    }

    /**
     * @param $resuLocationId integer
     * @param $data \array
     *
     * @return boolean
     */
    private function saveBooleanOptionValues($id, $data)
    {
        if (empty($data['ResuLocation']['resu_location_boolean']) || !isset($data['ResuLocation']['resu_location_boolean'])) {
            return true;
        }
        $data = $data['ResuLocation']['resu_location_boolean'];
        $returnData = false;

        foreach ($data as $key => $value) {

            // any value other than 1 is not valid for our use case
            if ($value !== '1') {
                continue;
            }

            $resuLocOptionMDL = new \resutoran\common\models\ResuLocationBoolean([
                'resu_location_id'      => $id,
                'resu_boolean_option_id'=> \resutoran\common\models\ResuBooleanOption::find()
                    ->andWhere(['value' => $key])
                    ->one()
                    ->id
            ]);

            if ($resuLocOptionMDL->save()) {
                $returnData = true;
            } else {
                $returnData = $resuLocOptionMDL->getErrors();
            }
        }

        return $returnData;
    }

    /**
     * @param $id
     * @param $data
     *
     * @return array|bool
     */
    private function saveHoursValues($id, $data)
    {
        if (empty($data['ResuLocationHour']) || !isset($data['ResuLocationHour'])) {
            return true;
        }

        $returnData = false;

        foreach ($data['ResuLocationHour'] as $key => $value) {

            if (empty($value['open']) && empty($value['close']))  {
                $returnData = true;
                continue;
            }

            $model = new \resutoran\common\models\ResuLocationHour([
                'resu_day_option_id' => $key,
                'resu_location_id'   => $id,
                'open'               => $value['open'],
                'close'              => $value['close']
            ]);

            if ($model->save()) {
                $returnData = true;
            } else {
                $returnData = $model->getErrors();
            }
        }

        return $returnData;
    }

    /**
     * We are only adding or remove a resu location {option} values.
     *
     * @param int   $id
     * @param array $data
     *
     * @return static
     */
    private function saveResuLocDressOption($id, array $data)
    {
        $model = \resutoran\common\models\ResuLocationDressCode::find()
            ->andwhere(['resu_location_id' => (int)$id])
            ->all();

        // 'delete' items not found in $data array



        // 'add' new items to DB.TBO
        foreach ($data as $key => $value) {
            if ($model === null) {
                $model = new \resutoran\common\models\ResuLocationDressCode();
                $model->setAttributes([
                    'resu_location_id'          => $id,
                    'resu_dress_code_option_id' => $value,
                ]);
                $model->save();
                // create new record
            }

            // remove old, no longer provided options
        }

        return $model;
    }
}
