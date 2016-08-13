<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResuBooleanOption */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Boolean Option',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Boolean Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-boolean-option-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
