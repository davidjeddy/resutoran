<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_DressCodeOption */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Dress Code Option',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Dress Code Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="resu-dress-code-option-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
