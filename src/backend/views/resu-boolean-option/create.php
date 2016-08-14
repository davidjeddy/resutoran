<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_BooleanOption */

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
