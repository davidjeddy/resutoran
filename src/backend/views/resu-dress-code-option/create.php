<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_DressCodeOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Dress Code Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Dress Code Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-dress-code-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
