<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model resutoran\common\models\Resu[location_options][resu_Location */

$this->title = $model->value;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resutoran', ' Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resu-location-view">

    <p>
        <?php echo Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'value',
            [
                'label' => 'Franchise',
                'value' => (\resutoran\common\models\ResuFranchise::findOne(['id' => $model->resu_franchise_id])->value ?: null)
            ],
            [
                'label' => 'Decor',
                'value' => (\resutoran\common\models\ResuDecorOption::findOne(['id' => $model->resu_decor_option_id])->value ?: null)
            ],
            [
                'label' => 'Ambiance',
                'value' => (\resutoran\common\models\ResuAmbianceOption::findOne(['id' => $model->resu_ambiance_option_id])->value ?: null)
            ],
            [
                'label' => 'Map',
                'value' => (\resutoran\common\models\ResuMap::findOne(['id' => $model->resu_map_id])->value ?: null)
            ],

            [
                'label' => 'Hours of Operation',
                'value' => \Yii::$app->controller->renderPartial('../partials/DaysAndHours',
                    [
                        'model' => $model
                    ]
                )
            ],

            [
                'label' => 'Features Values',
                'value' => \Yii::$app->controller->renderPartial('../partials/multiItemList',
                    [
                        'model' => $model,
                        'option'=> 'boolean'
                    ]
                )
            ],
            [
                'label' => 'Cuisine',
                'value' => \Yii::$app->controller->renderPartial('../partials/multiItemList',
                    [
                        'model' => $model,
                        'option'=> 'cuisine'
                    ]
                )
            ],
            [
                'label' => 'Dress Code',
                'value' => \Yii::$app->controller->renderPartial('../partials/multiItemList',
                    [
                        'model' => $model,
                        'option'=> 'dress_code'
                    ]
                )
            ],
            [
                'label' => 'Media',
                'value' => \Yii::$app->controller->renderPartial('../partials/multiItemList',
                    [
                        'model' => $model,
                        'option'=> 'media'
                    ]
                )
            ],

            [
                'label' => 'Menu(s) Price Range',
                'value' =>  \Yii::$app->controller->renderPartial('../partials/MenuAmount',
                    [
                        'model' => $model
                    ]
                )
            ],

            [
                'label' => 'Payment',
                'value' => \Yii::$app->controller->renderPartial('../partials/multiItemList',
                    [
                        'model' => $model,
                        'option'=> 'payment'
                    ]
                )
            ],
            [
                'label' => 'Seating',
                'value' => \Yii::$app->controller->renderPartial('../partials/multiItemList',
                    [
                        'model' => $model,
                        'option'=> 'seating'
                    ]
                )
            ],
            [
                'label' => 'Created By',
                'value' => (\common\models\User::findOne(['id' => $model->created_by])->username ?: null)
            ],
            'created_at:date',
            [
                'label' => 'Updated By',
                'value' => (\common\models\User::findOne(['id' => $model->created_by])->username ?: null)
            ],
            'updated_at:date',
            // 'deleted_at',
            //[
            //    'label' => 'updated_by',
            //    'value' => \common\models\User::findOne(['id' => $model->updated_by])->username
            //],
        ],
    ]) ?>

</div>
