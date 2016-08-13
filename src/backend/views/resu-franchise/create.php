<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuFranchise */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Franchise',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Franchises'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-franchise-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
