<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationHour */

$this->title = $model->value;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Hours'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-boolean-view">

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
            'resu_location_id',
            'resu_day_option_id',
            'open',
            'close',
            'created_at:date',
            [
                'label' => 'Updated By',
                'value' => (\common\models\User::findOne(['id' => $model->created_by])->username ?: null)
            ],
            'updated_at:date',
            // 'deleted_at',
            //[
            //    'label' => 'updated_by',
            //    'value' => \common\models\User::findOne(['id' => $model->updated_by])->username
            //],
        ],
    ]) ?>

</div>
