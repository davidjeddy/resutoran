<?php

use yii\bootstrap\ActiveForm;
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

        <?php // echo $form->field($model, 'resu_day_option_id')->textInput() ?>

        <?php
        $daysOfWeek = \resutoran\common\models\ResuDayOption::find()->all();
        foreach ($daysOfWeek as $key => $dayMDL) {
            echo '<div class="form-group">';
            echo Html::label($dayMDL->value);
            echo '<br />';

            // public static function input($type, $name = null, $value = null, $options = [])
            echo Html::label('Open');
            // public static function input($type, $name = null, $value = null, $options = [])
            echo Html::input(
                'input',
                'ResuLocationHour[' . $dayMDL->id . '][open]',
                ((string)$model[$key]->open ?? null),
                [
                    'class'         => 'form-control',
                    'placeholder'   => '00:00 to 24:00 format',
                    'maxlength'     => true,
                ]
            );

            echo Html::label('Close');
            echo Html::input(
                'text',
                'ResuLocationHour[' . $dayMDL->id . '][close]',
                ((string)$model[$key]->close ?? null),
                [
                    'class' => 'form-control',
                    'placeholder' => '00:00 to 24:00 format',
                    'maxlength'   => true,
                ]
            );
            echo '</div>';
        }
        ?>

        <?php echo $this->render('./partials/_timestamp_submit_skip.php', [
            'model' => $model,
            'nextStep' => 'add-menu'
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
