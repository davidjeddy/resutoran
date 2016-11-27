<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResuReview */

$this->title = Yii::t('resutoran', 'Update {modelClass}: ', [
    'modelClass' => 'Resu Review',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Resu Reviews'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('resutoran', 'Update');
?>
<div class="resu-review-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
