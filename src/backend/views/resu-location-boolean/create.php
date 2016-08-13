<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuLocationBoolean */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Location Boolean',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Location Booleans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-boolean-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
