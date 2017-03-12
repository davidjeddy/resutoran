<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = Yii::t('backend', '{modelClass} Hours', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Create'), 'url' => ['/resu-location-new-process/create']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="resu-location-create">

    <div class="resu-location-form">

        <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->errorSummary($model); ?>

        <?php // cho $form->field($model, 'resu_day_option_id')->textInput() ?>
        <?php echo $this->render('../partials/Select2', [
            'options' => [
                'clear'     => true,
                'form'      => $form,
                'label'     => 'DayOption',
                'model'     => $model,
                'options'   => ArrayHelper::map(
                    \resutoran\common\models\ResuDayOption::find()->asArray()->all(),
                    'id',
                    'value'
                )
            ]
        ]); ?>

        <?php echo $form->field($model, 'open')->textInput([
            'placeholder' => '00:00 to 24:00 format',
            'maxlength'   => true
        ]) ?>

        <?php echo $form->field($model, 'close')->textInput([
            'placeholder' => '00:00 to 24:00 format',
            'maxlength'   => true
        ]) ?>

        <?php echo $this->render('./partials/_timestamp_submit_skip.php', [
            'model' => $model,
            'nextStep' => 'add-menu'
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
