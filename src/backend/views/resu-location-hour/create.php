<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationHour */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Hour',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Hours'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-boolean-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
