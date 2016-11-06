<?php

/* @var $model \yii\db\ActiveRecord */

// TODO make this a AR data retrieval, not a SQL request
$hours = \resutoran\common\models\ResuLocationDay::find()
    ->select('resu_location_day.*, resu_day_option.value as day, resu_hour_value.value as hour')
    ->andWhere(['resu_location_id' => $model->id])
    ->leftJoin('resu_day_option', '`resu_day_option`.`id` = `resu_location_day`.`resu_day_option_id`')
    ->leftJoin('resu_hour_value', '`resu_hour_value`.`id` = `resu_location_day`.`resu_hour_value_id`')
    ->asArray()
    ->all();

foreach ($hours as $key => $value) {
    echo $value['day'] . ' ' . $value['hour'];

    if ($key + 1 < count($hours)) {
        echo ', ';
    }
}


