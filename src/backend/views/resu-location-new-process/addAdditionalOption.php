<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\widgets\Select2;
use kartik\checkbox\CheckboxX;

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

        <?php
        echo Html::label('Dress Option');
        echo Select2::widget([
            'name'          => 'ResuLocation[location_options][resu_location_dress_code][]',
            'value'         => null,
            'maintainOrder' => true,
            'data'          => ArrayHelper::map(\resutoran\common\models\ResuDressCodeOption::find()->all(), 'id', 'value'),
            'options'       => [
                'multiple'      => true,
                'placeholder'   => 'Select Dress Code Options ...'
            ]
        ]) ?>

        <?php
        echo Html::label('Seating Option');
        echo Select2::widget([
            'name'      => 'ResuLocation[location_options][resu_location_seating][]',
            'value'     => null,
            'data'      => ArrayHelper::map(\resutoran\common\models\ResuSeatingOption::find()->all(), 'id', 'value'),
            'options'   => [
                'multiple'      => true,
                'placeholder'   => 'Select Seating Options ...'
            ]
        ]) ?>

        <?php
        echo Html::label('Cuisine Option');
        echo Select2::widget([
            'name'      => 'ResuLocation[location_options][resu_location_cuisine][]',
            'value'     => null,
            'data'      => ArrayHelper::map(\resutoran\common\models\ResuCuisineOption::find()->all(), 'id', 'value'),
            'options'   => [
                'multiple'      => true,
                'placeholder'   => 'Select Cuisine Options ...'
            ]
        ]) ?>

        <?php
        echo Html::label('Media Option');
        echo Select2::widget([
            'name'      => 'ResuLocation[location_options][resu_location_media][]',
            'value'     => null,
            'data'      => ArrayHelper::map(\resutoran\common\models\ResuMediaOption::find()->all(), 'id', 'value'),
            'options'   => [
                'multiple'      => true,
                'placeholder'   => 'Select Media Options ...'
            ]
        ]) ?>

        <?php
        echo Html::label('Payment Option');
        echo Select2::widget([
            'name'      => 'ResuLocation[location_options][resu_location_payment][]',
            'value'     => null,
            'data'      => ArrayHelper::map(\resutoran\common\models\ResuPaymentOption::find()->all(), 'id', 'value'),
            'options'   => [
                'multiple'      => true,
                'placeholder'   => 'Select Payment Options ...'
            ]
        ]) ?>

        <?php
        echo Html::label('Boolean Option');
        echo \yii\bootstrap\BaseHtml::checkboxList(
            'resu_location_boolean',
            null,
            ArrayHelper::map(
                \resutoran\common\models\ResuBooleanOption::find()->all(),
                'id',
                'value'
            ),
            [
                'inline' => false,
                'item'   => function($index, $label, $name, $checked, $value) {

                    $name = 'ResuLocation[resu_location_boolean]['.$index.']';

                    echo '<label class="cbx-label" for="'.$name.'">'.$label.'</label>';
                    echo CheckboxX::widget([
                        'name'          => $name,
                        'value'         => $label,
                        'pluginOptions' => [
                            'threeState' => false
                        ]
                    ]);
                }
            ]
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
