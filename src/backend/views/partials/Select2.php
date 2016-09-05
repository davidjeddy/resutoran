<?php

use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Inflector;

/* @var $options array */

$classPath= '\resutoran\common\models\Resu' . $options['label'];
$modelClass = new $classPath();

echo $options['form']->field($options['model'], 'resu_' . Inflector::underscore( $options['label'] ) . '_id')->widget(Select2::className(), [
    'data'      => ArrayHelper::map($modelClass::find()->all(), 'id', 'value'),
    'options'   => [
        'class'       => 'form-control',
        'placeholder' => 'Choose Franchise...',
        'multiple'    => (!empty($options['multiple']) ? $options['multiple'] : false),
        'required'    => (!empty($options['required']) ? $options['required'] : false),
    ],
    'pluginOptions' => [
        'allowClear' => (!empty($options['clear']) ? $options['clear'] : false),
    ],
])->label( Inflector::camel2words( $options['label']) );
