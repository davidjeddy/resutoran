<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_MediaOption */

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
