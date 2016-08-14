<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationSeating */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Seating',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Seatings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-seating-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
