<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('resutoran', ' Location Hours');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-boolean-index">


    <p>
        <?php echo Html::a(Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Hour',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'resuLocation.value:text:Location',
            'resuDayOption.value:text:Day',
            'open',
            'close',
            // 'updated_at:date',
            // 'updated_by',
            // 'updated_at',
            // 'updated_by',
            // 'deleted_at:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
