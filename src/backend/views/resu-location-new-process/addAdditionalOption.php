<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\widgets\Select2;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model \resutoran\common\models\ResuLocation */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = Yii::t('backend', '{modelClass} Additional Options', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Create'), 'url' => ['/resu-location-new-process/create']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="resu-location-create">

    <div class="resu-location-form">

        <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
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
        </div>

        <div class="form-group">
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
        </div>

        <div class="form-group">
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
        </div>

        <div class="form-group">
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
        </div>

        <div class="form-group">
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
        </div>

        <div class="form-group">
            <?php
            echo Html::label('Boolean Option');
            echo '<br />';
            echo \yii\bootstrap\BaseHtml::checkboxList(
                'resu_location_boolean',
                null,
                ArrayHelper::map(
                    \resutoran\common\models\ResuBooleanOption::find()->all(),
                    'id',
                    'value'
                ),
                [
                    'threeState'=>false,
                    'inline' => false,
                    'item'   => function($index, $label, $name, $checked, $value) {

                        $name = 'ResuLocation[resu_location_boolean]['.$label.']';

                        echo '<label class="cbx-label" for="'.$name.'">'.$label.'</label>';
                        echo CheckboxX::widget([
                            'name'          => $name,
                            'value'         => (\resutoran\common\models\ResuLocationBoolean::find()
                                ->andWhere(['resu_location_id' => \Yii::$app->request->getQueryParam('id')])
                                ->andWhere(['resu_boolean_option_id' => $value])
                                ->one() !== null ? 1 : 0),
                            'pluginOptions' => [
                                'threeState' => false
                            ]
                        ]);
                        echo '<br />';
                    }
                ]
            ) ?>

        <?php echo $this->render('./partials/_timestamp_submit_skip.php', [
            'model' => $model,
            'nextStep' => 'add-contact'
        ]) ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
