<?php

namespace resutoran\frontend;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@vendor/davidjeddy/yii2-resutoran/src/frontend/assets/';

    public $css = [
        'css/resutoran.css'
    ];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
