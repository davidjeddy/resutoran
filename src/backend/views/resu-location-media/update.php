<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResuLocationMedia */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Location Media',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Media'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-location-media-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
