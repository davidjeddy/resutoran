<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResuHoursOption */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Hours Option',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Hours Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-hours-option-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
