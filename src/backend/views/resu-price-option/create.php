<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuPriceOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Price Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Price Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-price-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
