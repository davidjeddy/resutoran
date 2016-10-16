<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationSpeciality Menu */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Speciality Menu',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Speciality Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-speciality-menu-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
