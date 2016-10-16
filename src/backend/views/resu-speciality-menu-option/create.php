<?php

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_AlcoholOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Alcohol Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Alcohol Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-alcohol-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
