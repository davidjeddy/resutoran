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
            $currentValues = ArrayHelper::map(
                \resutoran\common\models\ResuLocationDressCode::find()
                    ->select(['id', 'resu_location_id', 'resu_dress_code_option_id'])
                    ->andWhere(['resu_location_id' => \Yii::$app->request->getQueryParam('id')])
                    ->asArray()
                    ->all(),
                'id',
                'resu_dress_code_option_id'
            );

            echo Html::label('Dress Option');
            echo Select2::widget([
                'name'      => 'ResuLocation[location_options][resu_location_dress_code][]',
                'value'     => ($currentValues ? $currentValues : null),
                'data'      => ArrayHelper::map(\resutoran\common\models\ResuDressCodeOption::find()->all(), 'id', 'value'),
                'options'   => [
                    'multiple'      => true,
                    'placeholder'   => 'Select Dress Code Options ...'
                ]
            ]) ?>
        </div>

        <div class="form-group">
            <?php
            $currentValues = ArrayHelper::map(
                \resutoran\common\models\ResuLocationSeating::find()
                    ->select(['id', 'resu_location_id', 'resu_seating_option_id'])
                    ->andWhere(['resu_location_id' => \Yii::$app->request->getQueryParam('id')])
                    ->asArray()
                    ->all(),
                'id',
                'resu_seating_option_id'
            );

            echo Html::label('Seating Option');
            echo Select2::widget([
                'name'      => 'ResuLocation[location_options][resu_location_seating][]',
                'value'     => ($currentValues ? $currentValues : null),
                'data'      => ArrayHelper::map(\resutoran\common\models\ResuSeatingOption::find()->all(), 'id', 'value'),
                'options'   => [
                    'multiple'      => true,
                    'placeholder'   => 'Select Seating Options ...'
                ]
            ]) ?>
        </div>

        <div class="form-group">
            <?php
            $currentValues = ArrayHelper::map(
                \resutoran\common\models\ResuLocationCuisine::find()
                    ->select(['id', 'resu_location_id', 'resu_cuisine_option_id'])
                    ->andWhere(['resu_location_id' => \Yii::$app->request->getQueryParam('id')])
                    ->asArray()
                    ->all(),
                'id',
                'resu_cuisine_option_id'
            );

            echo Html::label('Cuisine Option');
            echo Select2::widget([
                'name'      => 'ResuLocation[location_options][resu_location_cuisine][]',
                'value'     => ($currentValues ? $currentValues : null),
                'data'      => ArrayHelper::map(\resutoran\common\models\ResuCuisineOption::find()->all(), 'id', 'value'),
                'options'   => [
                    'multiple'      => true,
                    'placeholder'   => 'Select Cuisine Options ...'
                ]
            ]) ?>
        </div>

        <div class="form-group">
            <?php
            $currentValues = ArrayHelper::map(
                \resutoran\common\models\ResuLocationMedia::find()
                    ->select(['id', 'resu_location_id', 'resu_media_option_id'])
                    ->andWhere(['resu_location_id' => \Yii::$app->request->getQueryParam('id')])
                    ->asArray()
                    ->all(),
                'id',
                'resu_media_option_id'
            );

            echo Html::label('Media Option');
            echo Select2::widget([
                'name'      => 'ResuLocation[location_options][resu_location_media][]',
                'value'     => ($currentValues ? $currentValues : null),
                'data'      => ArrayHelper::map(\resutoran\common\models\ResuMediaOption::find()->all(), 'id', 'value'),
                'options'   => [
                    'multiple'      => true,
                    'placeholder'   => 'Select Media Options ...'
                ]
            ]) ?>
        </div>

        <div class="form-group">
            <?php
            $currentValues = ArrayHelper::map(
                \resutoran\common\models\ResuLocationPayment::find()
                    ->select(['id', 'resu_location_id', 'resu_payment_option_id'])
                    ->andWhere(['resu_location_id' => \Yii::$app->request->getQueryParam('id')])
                    ->asArray()
                    ->all(),
                'id',
                'resu_payment_option_id'
            );

            echo Html::label('Payment Option');
            echo Select2::widget([
                'name'      => 'ResuLocation[location_options][resu_location_payment][]',
                'value'     => ($currentValues ? $currentValues : null),
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
