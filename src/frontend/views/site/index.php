<?php

use \yii\helpers\Html;
use \resutoran\frontend\AppAsset;

$assets = AppAsset::register($this);

/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>

<div class="site-index">

    <?php echo Html::img($assets->baseUrl . '/images/header-1.jpg', [
        'id' => 'bg',
        'alt' => 'ASDF'
    ]); ?>

    <br />
    <br />

    <div style="zfg-body-copy">
        <div class="col-md-4"></div>
        <div class="text-center col-md-4">
            <h1 class="zfg-body-copy">Zero Forks Given</h1>
            <h4 class="zfg-body-copy">Your source for great local eateries.</h4>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
