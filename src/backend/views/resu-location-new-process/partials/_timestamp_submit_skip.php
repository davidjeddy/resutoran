<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model resutoran\common\models\* */
/* @var $nextStep string */

?>

<?php // echo $form->field($model, 'created_at')->textInput() ?>

<?php // echo $form->field($model, 'created_by')->textInput() ?>

<?php // echo $form->field($model, 'updated_at')->textInput() ?>

<?php // echo $form->field($model, 'updated_by')->textInput() ?>

<?php // echo $form->field($model, 'deleted_at')->textInput() ?>

<div class="form-group">
    <?php echo Html::submitButton(
        Yii::t('backend', 'Next'),
        [
            'class' =>'btn btn-primary'
        ]
    ); ?>
</div>

<div class="form-group">
    <?php
    if (!isset($nextStep)) {
        return false;
    } elseif (is_string($nextStep)) {
        echo Html::a(
            'Skip',
            ['resu-location-new-process/' . $nextStep . '?' . \Yii::$app->request->getQueryString()],
            ['class'=>'btn btn-primary']
        );

    } elseif (is_array($nextStep)) {
        echo Html::a(
            (!empty($nextStep['label']) ? $nextStep['label'] : 'Skip'),
            $nextStep['url'],
            ['class'=>'btn btn-primary']
        );
    };
    ?>
</div>
