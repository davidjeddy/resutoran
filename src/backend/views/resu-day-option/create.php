<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_CuisineOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Cuisine Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Cuisine Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-cuisine-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
