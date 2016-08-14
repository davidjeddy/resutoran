<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationPayment */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Location Payment',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Payments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-location-payment-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
