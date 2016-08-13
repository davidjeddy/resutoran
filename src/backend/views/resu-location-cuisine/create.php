<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuLocationCuisine */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Cuisine',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Cuisines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-cuisine-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
