<?php

/* @var $this yii\web\View */
/* @var $model \yii\db\ActiveRecord */
/* @var $option string option name in attribute_style_format */

$locOptionMDLName = $model::className() . \yii\helpers\BaseInflector::camelize( $option );
$locationQuery = $locOptionMDLName::find()
    ->select('resu_' . $option .'_option_id')
    ->andWhere(['resu_location_id' => $model->id]);

// todo better way of determining *optionMDL class name? - DJE
$optionMDLName = '\resutoran\common\models\Resu' . \yii\helpers\BaseInflector::camelize( $option ) . 'Option';
$queryResult = $optionMDLName::find()
    ->andWhere(['in', 'id', $locationQuery]);

$data = $queryResult->select(['id', 'value'])->all();

foreach ($data as $key => $value) {
    echo ($key + 1 < count($data)) ? $value->value . ', ' : $value->value;
}
