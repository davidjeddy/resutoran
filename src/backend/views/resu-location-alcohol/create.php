<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationAlcohol */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Alcohol',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Alcohols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-alcohol-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
