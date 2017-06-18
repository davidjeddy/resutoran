<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel resutoran\models\search\ResuLocationPrice */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('resutoran', 'Resu Location Prices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-price-index">

    <p>
        <?php echo Html::a(Yii::t('resutoran', 'Create {modelClass}', [
    'modelClass' => 'Resu Location Price',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'resu_location_id',
            'low',
            'high',
            'created_at:date',
            'created_by',
            'updated_at:date',
            // 'updated_by',
            // 'deleted_at:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
