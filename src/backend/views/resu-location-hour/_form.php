<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\ResuLocationHour */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="resu-location-boolean-form">

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

    <?php // cho $form->field($model, 'resu_day_option_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'DayOption',
            'model'     => $model,
            'options'   => ArrayHelper::map(
                resutoran\common\models\ResuDayOption::find()->asArray()->all(),
                'id',
                'value'
            )
        ]
    ]); ?>

    <?php echo $form->field($model, 'open')->textInput([
        'placeholder' => '00:00 to 24:00 format',
        'maxlength'   => true
    ]) ?>

    <?php echo $form->field($model, 'close')->textInput([
        'placeholder' => '00:00 to 24:00 format',
        'maxlength'   => true
    ]) ?>

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
