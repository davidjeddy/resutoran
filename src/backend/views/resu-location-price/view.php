<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model resutoran\models\ResuLocationPrice */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Resu Location Prices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-price-view">

    <p>
        <?php echo Html::a(Yii::t('resutoran', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a(Yii::t('resutoran', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('resutoran', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'resu_location_id',
            'low',
            'high',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'deleted_at',
        ],
    ]) ?>

</div>
