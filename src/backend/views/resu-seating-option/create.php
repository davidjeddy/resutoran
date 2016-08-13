<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuSeatingOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Seating Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Seating Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-seating-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
