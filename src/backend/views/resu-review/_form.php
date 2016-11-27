<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ResuReview */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resu-review-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'user_id')->textInput() ?>

    <?php //echo $form->field($model, 'resu_location_id')->textInput() ?>
    <?php echo $this->render('../partials/Select2', [
        'options' => [
            'clear'     => true,
            'form'      => $form,
            'label'     => 'Location',
            'model'     => $model,
            'required'  => true,
        ]
    ]); ?>

    <?php //echo $form->field($model, 'value')->textarea(['rows' => 6]) ?>
    <?php echo $form->field($model, 'value')->widget(
        \yii\imperavi\Widget::className(),
        [
            'plugins'   => ['fullscreen', 'fontcolor', 'video'],
            'options'   => [
                'minHeight'     => 400,
                'maxHeight'     => 400,
                'buttonSource'  => true,
                'imageUpload'   => \Yii::$app->urlManager->createUrl(['/file-storage/upload-imperavi'])
            ]
        ]
    )->label('Review Content'); ?>

    <?php //echo $form->field($model, 'created_at')->textInput() ?>

    <?php //echo $form->field($model, 'created_by')->textInput() ?>

    <?php //echo $form->field($model, 'updated_at')->textInput() ?>

    <?php //echo $form->field($model, 'updated_by')->textInput() ?>

    <?php //echo $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('resutoran', 'Create') : Yii::t('resutoran', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
