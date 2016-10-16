<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationSpeciality Menu */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Location Speciality Menu',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Speciality Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-location-speciality-menu-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
