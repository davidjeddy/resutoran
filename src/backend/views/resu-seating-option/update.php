<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ResuSeatingOption */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Seating Option',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Seating Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-seating-option-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
