<?php

/* @var $model \yii\db\ActiveRecord */
/* @var $returnData string */

$returnData = null;

// TODO make this a AR data retrieval, not a SQL request
$menuAmount = \resutoran\common\models\ResuLocationMenu::find()
    ->andWhere(['resu_location_id' => $model->id])
    ->all();

foreach ($menuAmount as $key => $value) {
    $returnData .= \resutoran\common\models\ResuMenuOption::findOne(['id' => $value->resu_menu_option_id])->value .': ';
    $returnData .=  'High ' . $value['high_price'];
    $returnData .=  'Low ' . $value['low_price'];
}

echo $returnData;