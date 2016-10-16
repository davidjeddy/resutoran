<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_serviceOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'service Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' service Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-service-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
