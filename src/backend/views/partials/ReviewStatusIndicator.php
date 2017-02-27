<?php

use  resutoran\backend\assets\ResuReviewBundle;
$resuAppAsset = ResuReviewBundle::register($this);

/* @var $model \yii\db\ActiveRecord */
/* @var $returnData string */

$returnData = null;
$adminIds   = explode(',', env('ADMIN_IDS'));

if (!is_array($adminIds)) {
    return 'No reviewers found.';
}

foreach ($adminIds as $key => $value) {
    // default status
    $reviewStatus = 0;

    // get user information
    $userMDL = \common\models\User::findOne([
        'id' => $value
    ]);
    if ($userMDL === null) {
        continue;
    }

    // get review information
    $reviewMDL = \resutoran\common\models\ResuReview::find()
        ->select(['id', 'resu_location_id', 'user_id'])
        ->andWhere([
            'user_id' => $value,
            'resu_location_id' => $model->id
        ])
        ->one();

    if (!is_int($reviewMDL->id)) {
        $reviewStatus = 0;
    } else {
        $reviewStatus = 1;
    }

    echo $userMDL->username .': <img
            src="' . $resuAppAsset->baseUrl . '/' . $resuAppAsset->image[$reviewStatus] . '"
            alt=""
            class=""
            height="32"
            width="32"
        />&nbsp;';
}