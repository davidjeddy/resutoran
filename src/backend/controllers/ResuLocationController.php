<?php

namespace resutoran\backend\controllers;

use Yii;

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
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new $this->model();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            // go save the resu_location_* optional data
            $this->saveLocationOptions($model, \Yii::$app->request->post()['ResuLocation']['location_options']);

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * @param $model \yii\db\ActiveRecord
     * @param $optionMDLArray array
     *
     * @return boolean
     */
    private function saveLocationOptions($model, $optionMDLArray)
    {
        $returnData = false;

        foreach ($optionMDLArray as $optionKeyMDL => $optionValueAttributes) {

            // does the option model class exists?s
            $optionMDL = 'resutoran\common\models\\' . \yii\helpers\BaseInflector::camelize( $optionKeyMDL );
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
                throw new \yii\base\Exception('Unable to find related model for optional data.');
            }
        }

        return $returnData;
    }
}
