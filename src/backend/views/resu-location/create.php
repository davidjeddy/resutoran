<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuLocation */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
