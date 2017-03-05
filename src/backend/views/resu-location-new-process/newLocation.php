<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Create Locations'), 'url' => ['create']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="resu-location-create">

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

        <?php echo $form->field($model, 'city')->textInput([
            'placeholder' => 'City',
            'maxlength'   => true
        ]) ?>

        <?php echo $form->field($model, 'zip_code')->textInput([
            'placeholder' => 'ZIP Code',
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
