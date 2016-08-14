<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_LocationMedia */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Media',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Media'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-media-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
