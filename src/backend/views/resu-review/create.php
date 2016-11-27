<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuReview */

$this->title = Yii::t('resutoran', 'Create Resu Review');
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Resu Reviews'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-review-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
