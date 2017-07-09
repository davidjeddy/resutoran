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

                    $hours = \resutoran\common\models\ResuLocationHour::find()
                        ->select(['open', 'close'])
                        ->andWhere(['resu_location_id' => $model['id']])
                        // php date() starts at 0, db.table starts at 1
                        ->andWhere(['resu_day_option_id' => date('N')])
                        ->asArray()
                        ->orderBy('id DESC')
                        ->one();

                    $phone = \resutoran\common\models\ResuLocationContact::find()
                        ->select(['phone'])
                        ->andWhere(['resu_location_id' => $model['id']])
                        ->asArray()
                        ->orderBy('id DESC')
                        ->one();

                    $entry = '
                        <div class="well">
                            <div class="col-sm-12">
                                <div class="col-sm-4">image</div>
                                <div class="col-sm-8">
                                    <div class="col-sm-12 text-left">
                                        <strong>' . $model['value'] . '</strong>
                                    </div>
                                    <div class="col-sm-12 text-left">
                                        <div class="col-sm-6 text-center">User Reviews</div>
                                        <div class="col-sm-6 text-center">ZFG Reviews</div>
                                    </div>
                                    <div class="col-sm-12 text-left">Todays hours: ' . $hours['open'] . ' - ' . $hours['close'] . '</div>
                                    <div class="col-sm-12 text-left">' . $model['address_1'] . ', ' . $model['city'] . '</div>
                                    <div class="col-sm-12 text-left">' . (isset($phone['phone']) ? $phone['phone'] : null) . '</div>
                                </div>
                            </div>
                            .
                        </div>
                    ';

                    echo \yii\helpers\Html::a( $entry, 'result-details?id=' . $model['id']);

                    return;
                },
                'emptyText'    => 'No results found for your query.',
                'summary'      => false
            ]); ?>

        </div>
        <div class="col-md-4"></div>
    </div>

</div>
