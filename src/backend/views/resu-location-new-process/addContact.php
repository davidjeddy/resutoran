<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = Yii::t('backend', '{modelClass} Options', [
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

</div>
