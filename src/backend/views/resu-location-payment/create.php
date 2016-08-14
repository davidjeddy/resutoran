<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationPayment */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Payment',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Payments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-payment-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
