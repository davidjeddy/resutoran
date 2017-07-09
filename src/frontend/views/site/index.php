<?php

use \yii\helpers\Html;
use \yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;
use \yii\bootstrap\Collapse;

use \resutoran\frontend\assets\AppAsset;

$assets = AppAsset::register($this);

/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>

<div class="site-index">

    <?php echo Html::img($assets->baseUrl . '/images/header-1.jpg', ['id' => 'bg']); ?>

    <div style="zfg-body-copy">
        <div class="col-md-4"></div>
        <div class="text-center col-md-4">
            <h1 class="zfg-body-copy">Zero Forks Given</h1>
            <h4 class="zfg-body-copy"><?php echo Yii::t('zfg', 'If you want our forks, you have to earn them.'); ?></h4>

            <h2 class="zfg-body-copy"><?php echo Yii::t('zfg', 'Find a review:'); ?></h2>

            <?php
                ActiveForm::begin([
                    'id'        => 'search-form',
                    'options'   => ['class' => 'form form-horizontal'],
                    'action'    => 'search'
                ]);
            ?>

            <?php echo Html::input(
                'text',
                'search[location]',
                12345,
                [
                    'class' => 'form form-control input',
                    'placeholder' => ' City, State, or ZIP'
                ]
            ); ?>

            <br />

            <?php echo Html::dropDownList(
                'search[cuisine]',
                null,
                ArrayHelper::map(
                    \resutoran\common\models\ResuCuisineOption::find()->asArray()->all(),
                    'id',
                    'value'
                ),
                [
                    'class' => 'form form-control',
                    'prompt'=> 'Select Cuisine'
                ]
            ); ?>

            <br />

            <?php echo Html::dropDownList(
                'search[price]',
                null,
                ['0 -> 10', '11 -> 20', '21 -> 30', '31 -> 40', '41 -> 50'],
                [
                    'class' => 'form form-control',
                    'prompt'=> 'Select Price Range'
                ]
            ); ?>

            <br />

            <?php
            $advSrchOptions = ''; #advanced search option fields

            //dropDownList($name, $selection = null, $items = [], $options = [])
            $filterOptions = [
                'ResuPaymentOption',
                'ResuMenuOption'
            ];

            // select one data
            foreach ($filterOptions as $key => $value) {
                $tboSource = '\resutoran\common\models\\' . $value;

                $advSrchOptions .= Html::dropDownList(
                    'price',
                    '',
                    ArrayHelper::map(
                        $tboSource::find()
                            ->select(['id', 'value'])->asArray()->all(),
                        'id',
                        'value'
                    ),
                    [
                        'class' => 'form form-control',
                        'prompt'=> 'Menu Options',
                    ]
                );
            }

            // boolean options as two column checkboxes
            // checkboxList($name, $selection = null, $items = [], $options = [])
            $advSrchOptions .= Html::checkboxList(
                'boolean-option',
                null,
                ArrayHelper::map(
                    \resutoran\common\models\ResuBooleanOption::find()
                        ->select(['id', 'value'])->asArray()->all(),
                    'id',
                    'value'
                ),
                [
                    'class' => 'form form-controls'
                ]
            );

            echo Collapse::widget([
                'items' => [
                    [
                        'label'         => 'More search options...',
                        'content'       => $advSrchOptions,
                        'contentOptions'=> [
                            'class' => 'in'
                        ]
                    ],
                ]
            ]); ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Search', ['class' => 'btn btn-default']) ?>
                </div>
            </div>

            <?php ActiveForm::end() ?>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
