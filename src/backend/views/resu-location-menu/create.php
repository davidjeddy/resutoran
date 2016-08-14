<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationMenu */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Menu',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-menu-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
