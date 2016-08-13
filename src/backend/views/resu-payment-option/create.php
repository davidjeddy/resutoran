<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuPaymentOption */

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
