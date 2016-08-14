<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_SeatingOption */

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
