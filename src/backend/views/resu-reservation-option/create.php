<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_ReservationOption */

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
