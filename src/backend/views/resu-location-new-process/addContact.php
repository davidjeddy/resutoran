<?php

use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = Yii::t('backend', '{modelClass} Contact', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Create'), 'url' => ['/resu-location-new-process/create']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="resu-location-create">

    <div class="resu-location-form">

        <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->errorSummary($model); ?>

        <!-- business contact fields -->
        <?php echo $form->field($model, 'name')->textInput([
            'placeholder' => 'Name',
            'maxlength'   => true
        ]) ?>

        <?php echo $form->field($model, 'title')->textInput([
            'placeholder' => 'Title',
            'maxlength'   => true
        ]) ?>

        <?php echo $form->field($model, 'email')->textInput([
            'placeholder' => 'Email',
            'maxlength'   => true
        ]) ?>

        <?php echo $form->field($model, 'phone')->textInput([
            'placeholder' => 'Phone',
            'maxlength'   => true
        ]) ?>

        <?php echo $this->render('./partials/_timestamp_submit_skip.php', [
            'model'     => $model,
            'nextStep' => 'add-hour'
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
