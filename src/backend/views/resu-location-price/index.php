<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ResuLocationPrice */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('resutoran', 'Resu Location Prices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-price-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('resutoran', 'Create {modelClass}', [
    'modelClass' => 'Resu Location Price',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->id), ['view', 'id' => $model->id]);
        },
    ]) ?>

</div>
