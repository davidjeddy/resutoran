<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationService */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Service',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Service'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-service-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
