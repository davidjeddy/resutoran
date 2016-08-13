<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuDecorOption */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Decor Option',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Decor Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-decor-option-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
