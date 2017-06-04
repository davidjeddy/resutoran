<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\models\ResuReview */

$this->title = Yii::t('resutoran', 'Update {modelClass}: ', [
    'modelClass' => 'Review for ',
]) . $this->title = \resutoran\common\models\ResuLocation::findOne(['id' => $model->resu_location_id])->value;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Resu Reviews'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('resutoran', 'Update');
?>
<div class="resu-review-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
