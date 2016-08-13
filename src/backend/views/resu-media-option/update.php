<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResuMediaOption */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Media Option',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Media Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-media-option-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
