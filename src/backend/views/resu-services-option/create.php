<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuServicesOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Services Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Services Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-services-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
