<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('resutoran', ' Location Speciality Menus');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-speciality-menu-index">


    <p>
        <?php echo Html::a(Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Speciality Menu',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'resu_location_id',
            'resu_alcohol_option_id',
            'created_at:date',
            'created_by',
            // 'updated_at',
            // 'updated_by',
            // 'deleted_at:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
