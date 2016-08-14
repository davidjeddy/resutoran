<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_serviceOption */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'service Option',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' service Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-service-option-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
