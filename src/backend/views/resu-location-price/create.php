<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\models\ResuLocationPrice */

$this->title = Yii::t('resutoran', 'Create {modelClass}', [
    'modelClass' => 'Resu Location Price',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Resu Location Prices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-price-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
