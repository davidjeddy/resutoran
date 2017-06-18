<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\models\ResuLocationPrice */

$this->title = Yii::t('resutoran', 'Update {modelClass}: ', [
    'modelClass' => 'Resu Location Price',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Resu Location Prices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('resutoran', 'Update');
?>
<div class="resu-location-price-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
