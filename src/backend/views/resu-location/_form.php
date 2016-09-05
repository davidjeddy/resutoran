<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

//echo '<PRE>';
//print_r( $model );
//print_r( $model->resuLocationDressCodes );
//print_r( ArrayHelper::map(\resutoran\common\models\ResuLocationDressCode::find()->select(['resu_dress_code_option_id'])->asArray()->all(), 'id', 'value'));
//$tmp = $model->resuLocationDressCodes;
/*$tmp = \resutoran\common\models\ResuDressCodeOption::find()
    ->select(['value'])
    ->andwhere(['IN', 'id', $model->resuLocaitonDressCode])
    ->all();*/

$tmp = null;
foreach ($model->resuLocationDressCodes as $key => $value) {
    $tmp[] = \resutoran\common\models\ResuDressCodeOption::findOne(['id' => $value->resu_dress_code_option_id])->value;
}

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="resu-location-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'value')->textInput([
        'placeholder' => 'Name of Location',
        'maxlength'   => true
    ]) ?>

    <?php // echo $form->field($model, 'resu_franchise_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'Franchise',
            'model'     => $model,
            'required'  => true,
        ]
    ]); ?>

    <?php // echo $form->field($model, 'resu_contact_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'Contact',
            'model'     => $model,
            'required'  => true,
        ]
    ]); ?>

    <?php // echo $form->field($model, 'resu_price_option_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'PriceOption',
            'model'     => $model,
            'required'  => true,
        ]
    ]); ?>

    <?php // echo $form->field($model, 'resu_decor_option_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'DecorOption',
            'model'     => $model,
            'required'  => true,
        ]
    ]); ?>

    <?php // echo $form->field($model, 'resu_ambiance_option_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'AmbianceOption',
            'model'     => $model,
            'required'  => true,
        ]
    ]); ?>

    <?php // echo $form->field($model, 'resu_map_id')->textInput(['placeholder' => 'Map URL to location'])->label('Map URL'); ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'Map',
            'model'     => $model,
            'required'  => true,
        ]
    ]); ?>

    <hr>
    <?php // Multiple select without model ?>

    <?php
    echo '<label class="control-label">Testing Tag Multiple</label>';
    echo Select2::widget([
        'name'          => 'testing',
        'value'         => ['teal', 'green', 'red'], // initial value (will be ordered accordingly and pushed to the top)
        'data'          => ['teal', 'orange', 'blue',' yellow', 'green', 'red'],
        'maintainOrder' => true,
        'options'       => [
            'placeholder'   => 'Select a color ...',
            'multiple'      => true
        ],
        'pluginOptions' => [
            'tags'              => true,
            'maximumInputLength'=> 10
        ],
    ]);
    ?>


    <?php
    echo Html::label('Dress Option');
    echo Select2::widget([
        'name'          => 'ResuLocation[location_options][resu_location_dress_code][]',
        'value'         => $tmp,
        'maintainOrder' => true,
        'data'          => ArrayHelper::map(\resutoran\common\models\ResuDressCodeOption::find()->all(), 'id', 'value'),
        'options'       => [
            'multiple'      => true,
            'placeholder'   => 'Select Dress Code Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Service Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_service][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuServiceOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select service Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Special Option');
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