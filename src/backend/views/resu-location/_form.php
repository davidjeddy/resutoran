<?php

use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="resu-location-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'resu_franchise_id')->textInput() ?>
    <?php echo $form->field($model, 'resu_franchise_id')->widget(Select2::className(), [
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuFranchise::find()->all(), 'id', 'value'),
        'options'   => [
            'class'       => 'form-control',
            'placeholder' => 'Choose Franchise...',
            'multiple'    => false,
            //'required'    => $model->isAttributeRequired('resu_franchise_id'),
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Franchise'); ?>

    <?php // echo $form->field($model, 'resu_contact_id')->textInput() ?>
    <?php echo $form->field($model, 'resu_contact_id')->widget(Select2::className(), [
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuContact::find()->all(), 'id', 'value'),
        'options'   => [
            'class'       => 'form-control',
            'placeholder' => 'Choose Contact...',
            'multiple'    => false,
            //'required'    => $model->isAttributeRequired('resu_franchise_id'),
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Contact'); ?>

    <?php // echo $form->field($model, 'resu_price_option_id')->textInput() ?>
    <?php echo $form->field($model, 'resu_price_option_id')->widget(Select2::className(), [
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuPriceOption::find()->all(), 'id', 'value'),
        'options'   => [
            'class'       => 'form-control',
            'placeholder' => 'Choose Price Option(s)...',
            'multiple'    => false,
            //'required'    => $model->isAttributeRequired('resu_franchise_id'),
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Pricing'); ?>

    <?php // echo $form->field($model, 'resu_decor_option_id')->textInput() ?>
    <?php echo $form->field($model, 'resu_decor_option_id')->widget(Select2::className(), [
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuDecorOption::find()->all(), 'id', 'value'),
        'options'   => [
            'class'       => 'form-control',
            'placeholder' => 'Choose Decor Option(s)...',
            'multiple'    => false,
            //'required'    => $model->isAttributeRequired('resu_franchise_id'),
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Decor'); ?>

    <?php // echo $form->field($model, 'resu_ambiance_option_id')->textInput() ?>
    <?php echo $form->field($model, 'resu_ambiance_option_id')->widget(Select2::className(), [
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuAmbianceOption::find()->all(), 'id', 'value'),
        'options'   => [
            'class'       => 'form-control',
            'placeholder' => 'Choose Ambiance...',
            'multiple'    => false,
            //'required'    => $model->isAttributeRequired('resu_franchise_id'),
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Ambiance'); ?>

    <?php // echo $form->field($model, 'resu_map_id')->textInput() ?>
    <?php echo $form->field($model, 'resu_map_id')->widget(Select2::className(), [
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuMap::find()->all(), 'id', 'value'),
        'options'   => [
            'class'       => 'form-control',
            'placeholder' => 'Choose Map...',
            'multiple'    => false,
            //'required'    => $model->isAttributeRequired('resu_franchise_id'),
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Map'); ?>

    <hr>
    <?php // Multiple select without model ?>

    <?php
    echo Html::label('Dress Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_dress_code][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuDressCodeOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Dress Code Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('service Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_service][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuserviceOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select service Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Boolean Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_boolean][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuBooleanOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Boolean Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Reservation Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_reservation][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuReservationOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Reservation Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Hours Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_hours][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuHoursOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Hours Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Seating Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_seating][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuSeatingOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Seating Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Cuisine Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_cuisine][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuCuisineOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Cuisine Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Media Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_media][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuMediaOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Media Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Payment Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_payment][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuPaymentOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Payment Options ...'
        ]
    ]); ?>

    <?php // echo $form->field($model, 'created_at')->textInput() ?>

    <?php // echo $form->field($model, 'created_by')->textInput() ?>

    <?php // echo $form->field($model, 'updated_at')->textInput() ?>

    <?php // echo $form->field($model, 'updated_by')->textInput() ?>

    <?php // echo $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>