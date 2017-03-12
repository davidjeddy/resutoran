<?php

use yii\bootstrap\ActiveForm;

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

        <?php echo $this->render('./partials/_timestamp_submit_skip.php', [
            'model' => $model,
            'nextStep' => [
                'url'   => '/admin/resutoran/resu-location'
                ]
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
