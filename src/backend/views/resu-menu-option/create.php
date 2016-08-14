<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_MenuOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Menu Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Menu Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-menu-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
