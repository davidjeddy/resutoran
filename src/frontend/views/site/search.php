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

<div class="site-search-results">

    <?php echo Html::img($assets->baseUrl . '/images/header-1.jpg', ['id' => 'bg']); ?>

    <div style="zfg-body-copy">
        <div class="col-md-4"></div>
        <div class="text-center col-md-4">
            <h1 class="zfg-body-copy">Zero Forks Given</h1>
            <h4 class="zfg-body-copy"><?php echo Yii::t('zfg', 'If you want our forks, you have to earn them.'); ?></h4>

            <button><?php echo Yii::t('zfg', 'Map view'); ?></button>
            <button><?php echo Yii::t('zfg', 'List view'); ?></button>
            <button><?php echo Yii::t('zfg', 'Search Again'); ?></button>

            <div><?php echo Yii::t('zfg', 'Click on any location for more deatails.'); ?></div>


            <?php echo \yii\widgets\ListView::widget([
                'dataProvider'  => $dataProvider,
                'options'       => ['class' => 'list-group'],
                'itemView'      => function ($model, $key, $index, $widget) {

                    echo 'Name: ' . $model['value'] . "<br />";
                    echo 'Address '  . $model['address_1'] . "<br />";
                    echo 'Phone: ' . "<br />";

                    // IMG | LocationName
                    // IMG | User Reviews | ZFG Reviews
                    // IMG | Today's Hours:
                    // IMG | Address
                    // IMG | Phone

//                    echo '<pre>';
//                    echo \yii\helpers\VarDumper::dump($model, 10, true);
//                    echo '</pre>';
                },
                'emptyText'    => 'No locations found.',
                'summary'      => ''
            ]); ?>

        </div>
        <div class="col-md-4"></div>
    </div>

</div>
