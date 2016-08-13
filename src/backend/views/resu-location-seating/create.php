<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuLocationSeating */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Seating',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Seatings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-seating-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
