<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuHoursOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Hours Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Hours Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-hours-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
