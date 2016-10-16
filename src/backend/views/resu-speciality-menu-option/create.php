<?php

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_AlcoholOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Speciality Menu Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', 'Speciality Menu Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-speciality-menu-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
