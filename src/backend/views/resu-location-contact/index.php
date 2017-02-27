<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('resutoran', ' Location Contacts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-contact-index">

    <p>
        <?php echo Html::a(Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Contact',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'resu_location_id',
            'name:ntext',
            'phone:ntext',
            'email:ntext',
            'title:ntext',
            'created_at:date',
            'created_by',
            'updated_at:date',
            // 'updated_by',
            // 'deleted_at:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
