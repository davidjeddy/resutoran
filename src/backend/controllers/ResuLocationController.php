<?php

namespace resutoran\backend\controllers;

use Yii;
use \yii\base\Exception;
use \yii\helpers\BaseInflector;

/**
 * ResuLocationController implements the CRUD actions for ResuLocation model.
 */
class ResuLocationController extends \resutoran\backend\controllers\BaseController
{
    /**
     * @var string
     */
    protected $model = '\resutoran\common\models\ResuLocation';

    /**
     * Creates a new ResuAmbianceOption model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * Based on BaseCNTL->actionCreate()
     *
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new $this->model();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            // go save resu_location_* day and hours data
            if (!empty(Yii::$app->request->post()['ResuLocation']['hour_value'])) {
                $this->saveHoursValues($model, Yii::$app->request->post()['ResuLocation']['hour_value']);
            }

            // go save the resu_location_* optional data
            if (!empty(Yii::$app->request->post()['ResuLocation']['location_options'])) {
                $this->saveLocationOptions($model, Yii::$app->request->post()['ResuLocation']['location_options']);
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * @param $model
     * @param $optionMDLArray
     *
     * @return bool
     * @throws \yii\base\Exception
     */
    private function saveLocationOptions($model, $optionMDLArray)
    {
        $returnData = false;

        foreach ($optionMDLArray as $optionKeyMDL => $optionValueAttributes) {

            // does the option model class exists?s
            $optionMDL = '\resutoran\common\models\\' . BaseInflector::camelize( $optionKeyMDL );

            if (class_exists($optionMDL)) {

                foreach ($optionValueAttributes as $optionValueKey => $optionValueValue) {

                    // create a an AR
                    $optionMDL = new $optionMDL;

                    $optionMDL->setAttributes([
                        'resu_location_id'      => $model->id,
                        // todo This is terrible, refactor - DJE
                        str_replace('_location', '', $optionKeyMDL) . '_option_id'   => $optionValueValue
                    ]);

                    // save option AR to data store, or return error if present
                    if (!$optionMDL->validate() || !$optionMDL->save()) {
                        $returnData = $optionMDL->getErrors();
                    } else {
                        $returnData = true;
                    }
                }
            } else {
                throw new Exception('Unable to find related model for optional data.');
            }
        }

        return $returnData;
    }

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
                'value' => $dayValue[0]
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
}
