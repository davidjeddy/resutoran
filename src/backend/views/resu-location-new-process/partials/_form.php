<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

?>

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

    <?php echo $form->field($model, 'city')->textInput([
        'placeholder' => 'City',
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
    ) ?>

    <?php echo $form->field($model, 'zip_code')->textInput([
        'placeholder' => 'ZIP Code',
        'maxlength'   => true
    ]) ?>

    <?php echo $this->render('./_timestamp_submit_skip.php', [
        'model' => $model
    ]) ?>

<?php ActiveForm::end(); ?>
