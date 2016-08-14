<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_Location */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
