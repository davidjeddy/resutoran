<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuDressCodeOption */

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
