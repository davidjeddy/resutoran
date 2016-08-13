<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResuMenuOption */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Menu Option',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Menu Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-menu-option-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
