<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_PaymentOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Payment Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Payment Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-payment-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
