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
                return \Yii::$app->response->redirect('add-contact?id=' . $model->id);
            }
        }

        return $this->render('addLocation', [
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
        $model = new \resutoran\common\models\ResuLocationContact();

        if (Yii::$app->request->isPost === true) {

            $data = Yii::$app->request->post();
            $data['ResuLocationContact']['resu_location_id'] = $id;

            if ($model->load($data) && $model->save()) {
                return \Yii::$app->response->redirect('create-option?id=' . $id);
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
    public function actionAddOption($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost === true) {

            $data = Yii::$app->request->post();

            if ($model->load($data) && $model->save()) {
                return \Yii::$app->response->redirect('add-menu?id=' . $id);
            }
        }

        return $this->render('addOption', [
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
        $model = new \resutoran\common\models\ResuLocationMenu();

        if (Yii::$app->request->isPost === true) {

            $data = Yii::$app->request->post();
            $saveStatus = $this->saveMenuAmountValues($id, $data['ResuLocation']['resu_location_menu']);

            //if ($model->load($data) && $model->save()) {
            if ($saveStatus === true) {
                return \Yii::$app->response->redirect('add-additional-options?id=' . $id);
            }
        }

        return $this->render('addMenu', [
            'model' => $model,
        ]);
    }
    // private methods

    /**
     * @TODO this smells funny, can we factor this out to something like an event?
     *
     * @param $model
     * @param $optionMDLArray
     *
     * @return bool
     * @throws Exception
     */
    private function saveHoursValues($model, $data)
    {
        $returnData = false;

        foreach ($data as $key => $dayValue) {

            // save the hour value to the resu_hour_value
            $hourValueMDL = new \resutoran\common\models\ResuHourValue([
                'open' => $dayValue[0],
                'close' => $dayValue[1]
            ]);

            // save hour AR to data store, or return error if present
            if (!$hourValueMDL->save()) {
                $returnData = $hourValueMDL->getErrors();
            } else {

                $locationDay = new \resutoran\common\models\ResuLocationDay([
                    'resu_day_option_id'=> $key,
                    'resu_location_id'  => $model->id,
                    'resu_hour_value_id'=> $hourValueMDL->id
                ]);

                if (!$locationDay->save()) {
                    $returnData = $locationDay->getErrors();
                }
            }
        }

        return $returnData;
    }

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
            $resuLocMenuMDL = new \resutoran\common\models\ResuLocationMenu;
            $resuLocMenuMDL->setAttributes([
                'resu_location_id'    => $resuLocationId,
                'resu_menu_option_id' => (integer)$key,
                'high_price'          => $menuAmountValue['high_price'] ?: null,
                'low_price'           => $menuAmountValue['low_price'] ?: null,
            ]);

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
     * @param $model \resutoran\common\models\ResuLocation
     * @param $data \array
     *
     * @return boolean
     */
    private function saveBooleanOptionValues($model, $data)
    {
        $returnData = false;

        foreach ($data as $key => $value) {
            // TODO why is the view widget returning 1 for un-checked checkboxes?
            if ($value === '1') {
                continue;
            }

            $resuLocOptionMDL = new \resutoran\common\models\ResuLocationBoolean([
                'resu_location_id'      => $model->id,
                'resu_boolean_option_id'=> \resutoran\common\models\ResuBooleanOption::findOne([
                    'value' => $value
                ])->id
            ]);

            if (!$resuLocOptionMDL->save()) {
                $returnData = $resuLocOptionMDL->getErrors();
            } else {
                $returnData = true;
            }
        }

        return $returnData;
    }
}
