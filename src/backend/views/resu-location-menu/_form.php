<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationMenu */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="resu-location-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'resu_location_id')->textInput() ?>

    <?php echo $form->field($model, 'resu_menu_option_id')->textInput() ?>

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
