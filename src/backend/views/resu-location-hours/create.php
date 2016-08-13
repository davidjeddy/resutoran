<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuLocationHours */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Hours',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Hours'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-hours-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
