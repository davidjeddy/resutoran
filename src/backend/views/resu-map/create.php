<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_Map */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Map',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Maps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-map-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
