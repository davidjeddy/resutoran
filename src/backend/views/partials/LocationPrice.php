<?php

/* @var $model \yii\db\ActiveRecord */

$model = \resutoran\common\models\ResuLocationPrice::find()
    ->select(['low', 'high'])
    ->andWhere(['resu_location_id' => $model->id])
    ->AsArray()
    ->one();

foreach ($model as $key => $value) {
    echo $key . ': $' . $value;

    if ($key === 'low') {
        echo ' - ';
    }
}


