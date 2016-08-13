<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ResuContact */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-contact-view">

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
            'country_code',
            'phone1',
            'phone2',
            'phone3',
            'address1:ntext',
            'address2:ntext',
            'address3:ntext',
            'country:ntext',
            'city:ntext',
            'prov',
            'created_at:date',
            'created_by',
            'updated_at:date',
            'updated_by',
            'deleted_at',
        ],
    ]) ?>

</div>
