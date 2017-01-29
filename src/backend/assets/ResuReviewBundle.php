<?php

namespace resutoran\backend\assets;

class ResuReviewBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/davidjeddy/yii2-resutoran/src/backend/assets';
    public $css = [
        './css/ResuReview.css',
    ];
    public $js  = [
        './js/ResuReview.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}