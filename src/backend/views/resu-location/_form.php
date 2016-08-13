<?php

use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResuLocation */
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
