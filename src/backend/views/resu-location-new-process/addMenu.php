<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = Yii::t('backend', '{modelClass} Menus', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Create'), 'url' => ['/resu-location-new-process/create']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="resu-location-create">

    <div class="resu-location-form">

        <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->errorSummary($model); ?>

        <?php
        echo \yii\bootstrap\BaseHtml::checkboxList(
            'resu_location_menu',
            null,
            ArrayHelper::map(
                \resutoran\common\models\ResuMenuOption::find()->all(),
                'id',
                'value'
            ),
            [
                'inline' => false,
                'item'   => function($index, $label, $name, $checked, $value) use ($form, $model) {

                    $return = '<div class="form-group field-resulocation-resu_location_menu required">
                            <label for="ResuLocation[resu_location_menu]['.$value.'][high_price]">'.$label.'</label>
                            <input type="text" class="form-control" value="' . $model[$index]['low_price'] . '" name="ResuLocation[resu_location_menu]['.$value.'][low_price]" maxlength="6" placeholder="Low Price (XXX.YY)">
                            <input type="text" class="form-control" value="' . $model[$index]['high_price'] . '" name="ResuLocation[resu_location_menu]['.$value.'][high_price]" maxlength="6" placeholder="High Price  (XXX.YY)">
                            <p class="help-block help-block-error"></p>
                        </div>';

                    return $return;
                }
            ]
        ); ?>

        <?php echo $this->render('./partials/_timestamp_submit_skip.php', [
            'model' => $model,
            'nextStep' => 'add-option'
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
