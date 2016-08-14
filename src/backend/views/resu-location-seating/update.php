<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationSeating */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Location Seating',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Seatings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-location-seating-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
