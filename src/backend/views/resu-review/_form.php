<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use dosamigos\ckeditor\CKEditor;
use kartik\widgets\StarRating;

use  resutoran\backend\assets\ResuReviewBundle;
ResuReviewBundle::register($this);

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\ResuReview */
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
    <?php echo $form->field($model, 'value')->widget(CKEditor::className(), [
        'options' => [
            'rows' => 6
        ],
        'preset' => 'basic'
    ])->label('Review Content'); ?>

    <?php
    echo $form->field($model, 'rating')->widget(StarRating::classname(), [
        'name' => 'rating',
        'pluginOptions'     => [
            'stars'         => 1,
            'size'          => 'xl',
            'min'           => 0.0,
            'max'           => 1,
            'step'          => 0.1,
            'defaultCaption'=> '{rating} fork',
        ]
    ]);
    ?>
    <?php
//    echo $form->field($model, 'rating')->widget(StarRating::classname(), [
//        'pluginOptions' => ['size'=>'lg']
//    ]);
    ?>

    <?php echo $form->field($model, 'status')->checkBox([
            'label'     => 'Completed',
            'checked'   => ($model->status === 2 ? true : false),
            'value'     => 2
    ]); ?>

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