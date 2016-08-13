<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ResuContact */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="resu-contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'country_code')->textInput() ?>

    <?php echo $form->field($model, 'phone1')->textInput() ?>

    <?php echo $form->field($model, 'phone2')->textInput() ?>

    <?php echo $form->field($model, 'phone3')->textInput() ?>

    <?php echo $form->field($model, 'address1')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'address2')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'address3')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'country')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'city')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'prov')->textInput(['maxlength' => true]) ?>

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
