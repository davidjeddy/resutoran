<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuBooleanOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Boolean Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Boolean Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-boolean-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
