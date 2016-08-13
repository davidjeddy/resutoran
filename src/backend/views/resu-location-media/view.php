<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ResuLocationMedia */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Media'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-media-view">

    <p>
        <?php echo Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'resu_media_option_id',
            'resu_location_id',
            'created_at:date',
            'created_by',
            'updated_at:date',
            'updated_by',
            // 'deleted_at',
        ],
    ]) ?>

</div>
