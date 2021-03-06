<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model resutoran\models\ResuReview */

//$this->title = $model->id;
$this->title = \resutoran\common\models\ResuLocation::findOne(['id' => $model->resu_location_id])->value;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Resu Reviews'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-review-view">

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
            //'id',
            //'user_id',
            [
                'label' => 'Review User',
                'value' => (\common\models\User::findOne(['id' => $model->user_id])->username ?: null)
            ],
            //'resu_location_id',
            [
                'label' => 'Location',
                'value' => $this->title
            ],
            'value:html',
            'rating:integer',
            //'status:integer',
            [
                'attribute' => 'status',
                'format'    => 'html',
                'value'     => $this->render('./partials/SingleReviewStatusIndicator', [
                        'model' => $model
                    ])
            ],
            'created_at:date',
            //'created_by',
            [
                'label' => 'Created By',
                'value' => (\common\models\User::findOne(['id' => $model->user_id])->username ?: null)
            ],
            'updated_at:date',
            'updated_by',
            //'deleted_at',
        ],
    ]) ?>

</div>
