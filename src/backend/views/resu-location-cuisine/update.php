<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationCuisine */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Location Cuisine',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Cuisines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-location-cuisine-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
