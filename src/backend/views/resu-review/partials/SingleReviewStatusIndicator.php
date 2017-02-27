<?php

use  resutoran\backend\assets\ResuReviewBundle;
$resuAppAsset = ResuReviewBundle::register($this);

/* @var $model \yii\db\ActiveRecord */

// get review information
$reviewStatus = 1;
$reviewMDL = \resutoran\common\models\ResuReview::find()
    ->select(['id', 'status'])
    ->andWhere([
        'resu_location_id' => $model->id
    ])
    ->one();

// if the review exists it will be a status 1
if (is_int($reviewMDL->status) && $reviewMDL->status === 0) {
    $model->status = 1;
}

echo '<img
        src     = "' . $resuAppAsset->baseUrl . '/' . $resuAppAsset->image[$model->status] . '"
        alt     = "Review Status"
        height  = "32"
        width   = "32"
    />&nbsp;';
