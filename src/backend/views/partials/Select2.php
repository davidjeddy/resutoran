<?php

use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Inflector;

/* @var $options array */

$classPath= '\resutoran\common\models\Resu' . $options['label'];
$modelClass = new $classPath();

// Because chosen.js + chrome has an issue with highlighting required fields when the given field is `visibility:hidden`
// ... only include the required attrib. on fields that require it, and do not include required=false on others.
// ... the chosen.js client side validate pre-submit is disabled
// @source https://github.com/harvesthq/chosen/issues/515
$required = [];
if (isset($options['required']) && $options['required'] === true) {
    //$required = ['required' => true];
}

echo $options['form']->field($options['model'], 'resu_' . Inflector::underscore( $options['label'] ) . '_id')->widget(Select2::className(), [
    'data'      => ArrayHelper::map($modelClass::find()->all(), 'id', 'value'),
    'options'   => array_merge(
        [
            'class'       => 'form-control',
            'placeholder' => 'Choose Franchise...',
            'multiple'    => (!empty($options['multiple']) ? $options['multiple'] : false),

        ],
        $required
    ),
    'pluginOptions' => [
        'allowClear' => (!empty($options['clear']) ? $options['clear'] : false),
    ],
])->label( Inflector::camel2words( $options['label']) );
