<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\ResuLocationPrice */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="resu-location-price-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php // echo $form->field($model, 'resu_location_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'Location',
            'model'     => $model,
            'options'   => ArrayHelper::map(
                \resutoran\common\models\ResuLocation::find()->asArray()->all(),
                'id',
                'value'
            )
        ]
    ]); ?>

    <?php //echo $form->field($model, 'low') ?>
    <?php echo MaskMoney::widget([
            'name' => 'low',
            'value' => null,
            'options' => [
                'placeholder' => 'Low average price...'
            ],
            'pluginOptions' => [
                'allowZero' => false,
                'allowEmpty' => true
            ]
        ]);
    ?>

    <?php //echo $form->field($model, 'high') ?>
    <?php echo MaskMoney::widget([
        'name' => 'high',
        'value' => null,
        'options' => [
            'placeholder' => 'High average price...'
        ],
        'pluginOptions' => [
            'allowZero' => false,
            'allowEmpty' => true
        ]
    ]);
    ?>

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
