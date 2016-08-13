<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuLocationService */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Service',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-service-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
