<?php

use yii\bootstrap\ActiveForm;

use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = Yii::t('backend', '{modelClass} Prices', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Create'), 'url' => ['/resu-location-new-process/create']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="resu-location-create">

    <div class="resu-location-form">

        <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->errorSummary($model); ?>

        <?php //echo $form->field($model, 'low') ?>
        <?php echo MaskMoney::widget([
            'name' => 'low',
            'value' => null,
            'options' => [
                'placeholder' => 'Low average price...'
            ],
            'pluginOptions' => [
                'allowZero' => false,
                'allowEmpty' => true
            ]
        ]);
        ?>

        <?php //echo $form->field($model, 'high') ?>
        <?php echo MaskMoney::widget([
            'name' => 'high',
            'value' => null,
            'options' => [
                'placeholder' => 'High average price...'
            ],
            'pluginOptions' => [
                'allowZero' => false,
                'allowEmpty' => true
            ]
        ]);
        ?>

        <?php echo $this->render('./partials/_timestamp_submit_skip.php', [
            'model' => $model,
            'nextStep' => 'add-option'
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
