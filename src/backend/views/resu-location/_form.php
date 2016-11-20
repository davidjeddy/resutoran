<?php

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

    <?php // echo $form->field($model, 'resu_map_id')->textInput(); ?>
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

    <?php
    $days = \resutoran\common\models\ResuDayOption::find()->select(['id', 'value', 'abbr'])->asArray()->all();
    foreach ($days as $key => $value) {
    ?>
        <div class="form-group field-resulocation-value required">
            <?php
            $fieldName = 'ResuLocation[hour_value]['.$value['id'].'][]';

            echo \yii\bootstrap\BaseHtml::label(
                $value['value'],
                $fieldName
            );

            // TODO make this a AR data retrieval, not a SQL request
            $hours = \resutoran\common\models\ResuLocationDay::find()
                ->select('resu_hour_value.value as hour')
                ->andWhere([
                    'resu_location_id' => $model->id,
                    'resu_day_option_id' => $value['id']
                ])
                ->leftJoin('resu_day_option', '`resu_day_option`.`id` = `resu_location_day`.`resu_day_option_id`')
                ->leftJoin('resu_hour_value', '`resu_hour_value`.`id` = `resu_location_day`.`resu_hour_value_id`')
                ->asArray()
                ->all();

            echo \yii\bootstrap\BaseHtml::textInput(
                $fieldName,
                !empty($hours[0]['hour']) ? $hours[0]['hour'] : null,
                [
                    'maxlength'     => 12,
                    'placeholder'   => 'Open-Close hours in 24h format. Exp: 07-13, 15-22',
                    'class'         => 'form-control',

                ]
            ); ?>

            <p class="help-block help-block-error"></p>
        </div>

    <?php }; ?>

    <hr>

    <?php
    echo \yii\bootstrap\BaseHtml::checkboxList(
        'resu_location_menu',
        null,
        ArrayHelper::map(
            \resutoran\common\models\ResuMenuOption::find()->all(),
            'id',
            'value'
        ),
        [
            'inline' => false,
            'item'   => function($index, $label, $name, $checked, $value) use ($form, $model) {

                $return  = '<div class="form-group field-resulocation-resu_location_menu"><label>'.$label;
                $return .= '    <div class="regular-radio-button"></div>';

                $return .= \yii\bootstrap\BaseHtml::textInput(
                    'ResuLocation[resu_location_menu]['.$value.'][high_price]',
                    null,
                    [
                        'maxlength'     => 7,
                        'placeholder'   => 'High price',
                        'class'         => 'form-control',
                    ]
                );

                $return .= \yii\bootstrap\BaseHtml::textInput(
                    'ResuLocation[resu_location_menu]['.$value.'][low_price]',
                    null,
                    [
                        'maxlength'     => 7,
                        'placeholder'   => 'Low price',
                        'class'         => 'form-control',
                    ]
                );

                $return .= '</label></div>';
                $return .= '<br />';

                return $return;
            }
        ]
    ); ?>

    <?php
    echo Html::label('Dress Option');
    echo Select2::widget([
        'name'          => 'ResuLocation[location_options][resu_location_dress_code][]',
        'value'         => ArrayHelper::map($model->getResuLocationDressCodes()->asArray()->all(), 'id', 'id'),
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
        //'value'     => null,
        'value'     => ArrayHelper::map($model->getResuLocationService()->asArray()->all(), 'id', 'id'),
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

    <?php
    echo Html::label('Alcohol Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_alcohol][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuAlcoholOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => false,
            'placeholder'   => 'Select Alcohol Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Menu Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_menu][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuMenuOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Menu Options ...'
        ]
    ]); ?>

    <?php
    echo Html::label('Speciality Menu Option');
    echo Select2::widget([
        'name'      => 'ResuLocation[location_options][resu_location_speciality_menu][]',
        'value'     => null,
        'data'      => ArrayHelper::map(\resutoran\common\models\ResuSpecialityMenuOption::find()->all(), 'id', 'value'),
        'options'   => [
            'multiple'      => true,
            'placeholder'   => 'Select Speciality Menu Options ...'
        ]
    ]); ?>

    <?php // echo $form->field($model, 'created_at')->textInput() ?>

    <?php // echo $form->field($model, 'created_by')->textInput() ?>

    <?php // echo $form->field($model, 'updated_at')->textInput() ?>

    <?php // echo $form->field($model, 'updated_by')->textInput() ?>

    <?php // echo $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord
            ? Yii::t('backend', 'Create')
            : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
        ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>