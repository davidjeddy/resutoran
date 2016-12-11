<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('resutoran', ' Locations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-index">

    <p>
        <?php echo Html::a(Yii::t('backend', 'Create {modelClass}', [
            'modelClass' => 'Location',
        ]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider'  => $dataProvider,
        'columns'       => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'value:text:Location Name',
            // 'resu_franchise_id',
            'resuFranchise.value:text:Franchise',
            // 'resuContact.value:text:Contact',
            // 'resu_price_option_id',
            // 'resu_decor_option_id',
            'resuDecorOption.value:text:Decor',
            // 'resu_ambiance_option_id',
            'resuAmbianceOption.value:text:Ambiance',
            // 'resu_map_id',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',
            // 'deleted_at:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
