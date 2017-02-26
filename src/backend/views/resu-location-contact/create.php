<?php

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_AmbianceOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Contact',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-contact-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
