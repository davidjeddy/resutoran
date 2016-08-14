<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_Franchise */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Franchise',
]) . ' ' . $model->value;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Franchises'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->value, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-franchise-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
