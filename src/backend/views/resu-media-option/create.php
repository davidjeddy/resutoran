<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuMediaOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Media Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Media Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-media-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
