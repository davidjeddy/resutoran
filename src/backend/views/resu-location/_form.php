<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\checkbox\CheckboxX;
use kartik\select2\Select2;

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

    <?php echo $form->field($model, 'address_1')->textInput([
        'placeholder' => 'Address 1',
        'maxlength'   => true
    ]) ?>

    <?php echo $form->field($model, 'address_2')->textInput([
        'placeholder' => 'Address 2',
        'maxlength'   => true
    ]) ?>

    <?php // echo $form->field($model, 'resu_state_id')->textInput() ?>
    <?php //. why the fuck wont our ./partial/Select2 work for this? ?>
    <?php echo $form->field($model, 'resu_state_id')->dropDownList(
        ArrayHelper::map(
            \resutoran\common\models\ResuState::find()->asArray()->all(),
            'id',
            'name'
        )
    ); ?>

    <!-- business contact fields -->
    <?php echo $form->field($model, 'business_contact_name')->textInput([
        'placeholder' => 'Business Contact Name',
        'maxlength'   => true
    ]) ?>
    <?php echo $form->field($model, 'business_email')->textInput([
        'placeholder' => 'Business Email',
        'maxlength'   => true
    ]) ?>
    <?php echo $form->field($model, 'business_phone')->textInput([
        'placeholder' => 'Business Phone',
        'maxlength'   => true
    ]) ?>


    <?php echo $form->field($model, 'phone')->textInput([
        'placeholder' => 'Phone',
        'maxlength'   => true
    ]) ?>

    <?php echo $form->field($model, 'email')->textInput([
        'placeholder' => 'Email',
        'maxlength'   => true
    ]) ?>

    <?php // echo $form->field($model, 'resu_franchise_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'Franchise',
            'model'     => $model
        ]
    ]); ?>

    <?php // echo $form->field($model, 'resu_decor_option_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'DecorOption',
            'model'     => $model
        ]
    ]); ?>

    <?php // echo $form->field($model, 'resu_ambiance_option_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'AmbianceOption',
            'model'     => $model
        ]
    ]); ?>

    <?php // echo $form->field($model, 'resu_map_id')->textInput(); ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'Map',
            'model'     => $model
        ]
    ]); ?>


    <hr>
    <?php echo Html::label('Menu Pricing'); ?><br />

    <?php
    // pricing options
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

                $return = '<div class="form-group field-resulocation-resu_location_menu required">
                    <label for="ResuLocation[resu_location_menu]['.$value.'][high_price]">'.$label.'</label>
                    <input type="text" class="form-control" name="ResuLocation[resu_location_menu]['.$value.'][low_price]" maxlength="6" placeholder="Low Price (XXX.YY)">
                    <input type="text" class="form-control" name="ResuLocation[resu_location_menu]['.$value.'][high_price]" maxlength="6" placeholder="High Price  (XXX.YY)">
                    <p class="help-block help-block-error"></p>
                </div>';

                return $return;
            }
        ]
    ); ?>

    <hr />
    <?php echo Html::label('Options'); ?><br />

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

    <hr />

    <?php echo Html::label('Features'); ?><br />

    <?php
    echo \yii\bootstrap\BaseHtml::checkboxList(
        'resu_location_boolean',
        null,
        ArrayHelper::map(
            \resutoran\common\models\ResuBooleanOption::find()->all(),
            'id',
            'value'
        ),
        [
            'inline' => false,
            'item'   => function($index, $label, $name, $checked, $value) {

                $name = 'ResuLocation[resu_location_boolean]['.$index.']';

                echo '<label class="cbx-label" for="'.$name.'">'.$label.'</label>';
                echo CheckboxX::widget([
                    'name'          => $name,
                    'value'         => $label,
                    'pluginOptions' => [
                        'threeState' => false
                    ]
                ]);
            }
        ]
    ); ?>

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

