<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Create Locations Options'), 'url' => ['newLocation']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="resu-location-create">

    <div class="resu-location-form">

        <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->errorSummary($model); ?>

        <?php // echo $form->field($model, 'resu_franchise_id')->textInput() ?>
        <?php echo $this->render('../partials/Select2', [
            'options' => [
                'clear'     => true,
                'form'      => $form,
                'label'     => 'Franchise',
                'model'     => $model
            ]
        ]) ?>

        <?php // echo $form->field($model, 'resu_decor_option_id')->textInput() ?>
        <?php echo $this->render('../partials/Select2', [
            'options' => [
                'clear'     => true,
                'form'      => $form,
                'label'     => 'DecorOption',
                'model'     => $model
            ]
        ]) ?>

        <?php // echo $form->field($model, 'resu_ambiance_option_id')->textInput() ?>
        <?php echo $this->render('../partials/Select2', [
            'options' => [
                'clear'     => true,
                'form'      => $form,
                'label'     => 'AmbianceOption',
                'model'     => $model
            ]
        ]) ?>

        <?php // echo $form->field($model, 'resu_map_id')->textInput(); ?>
        <?php echo $this->render('../partials/Select2', [
            'options' => [
                'clear'     => true,
                'form'      => $form,
                'label'     => 'Map',
                'model'     => $model
            ]
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
