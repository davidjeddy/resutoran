<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuReservationOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Reservation Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Reservation Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-reservation-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
