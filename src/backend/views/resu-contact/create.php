<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ResuContact */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Contact',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-contact-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
