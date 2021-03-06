<?php

/**
 * @var $this \Yii\web\View
 */

use \backend\widgets\Menu;

echo Menu::widget([
    'options'           => ['class'=>'sidebar-menu'],
    'linkTemplate'      => '<a href="{url}">{icon}<span>{label}</span>{right-icon}{badge}</a>',
    'submenuTemplate'   => "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
    'activateParents'   => true,
    'items' => [
// deprecated in 0.0.3, remove in 0.0.4
//        [
//            'label'     => \Yii::t('resutoran', 'Resutoran'),
//            'options'   => ['class' => 'header']
//        ],
        [
            'icon'      => '<i class="fa fa-star"></i>',
            'label'     => \Yii::t('resutoran', 'Reviews'),
            'url'       => ['/resutoran/resu-review'],
        ],
        [
            'icon'      => '<i class="fa fa-star"></i>',
            'label'     => \Yii::t('resutoran', 'New Location'),
            'url'       => ['/resutoran/resu-location-new-process/create'],
        ],
        [
            'icon'      => '<i class="fa fa-bars"></i>',
            'label'     => \Yii::t('resutoran', 'Locations'),
            'url'       => ['/resutoran/resu-location-new-process'],
        ],
        [
            'icon'      => '<i class="fa fa-bars"></i>',
            'label'     => \Yii::t('resutoran', 'Location Information'),
            'url'       => ['#'],
            'items'     => [
                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Contacts'),
                    'url'       => ['/resutoran/resu-location-contact'],
                ],
                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Franchise'),
                    'url'       => ['/resutoran/resu-franchise'],
                ],
                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Hours'),
                    'url'       => ['/resutoran/resu-location-hour'],
                ],
                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Prices'),
                    'url'       => ['/resutoran/resu-location-price'],
                ],
            ],
        ],
        [
            'icon'      => '<i class="fa fa-bars"></i>',
            'label'     => \Yii::t('resutoran', 'ZFG Options'),
            'url'       => ['#'],
            'items'     => [
                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Boolean Options'),
                    'url'       => ['/resutoran/resu-boolean-option'],
                ],
                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Map'),
                    'url'       => ['/resutoran/resu-map'],
                ],
                [
                    'icon'  => '<i class="fa fa-bars"></i>',
                    'label' => \Yii::t('resutoran', 'Ambiance'),
                    'url'   => ['/resutoran/resu-ambiance-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-bars"></i>',
                    'label' => \Yii::t('resutoran', 'Features'),
                    'url'   => ['/resutoran/resu-boolean-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-bars"></i>',
                    'label' => \Yii::t('resutoran', 'Cuisine'),
                    'url'   => ['/resutoran/resu-cuisine-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-bars"></i>',
                    'label' => \Yii::t('resutoran', 'Decor'),
                    'url'   => ['/resutoran/resu-decor-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-bars"></i>',
                    'label' => \Yii::t('resutoran', 'Dress Code'),
                    'url'   => ['/resutoran/resu-dress-code-option/'],
                ],
// deprecated in 0.0.3, remove in 0.0.4
//                [
//                    'icon'  => '<i class="fa fa-bars"></i>',
//                    'label' => \Yii::t('resutoran', 'Media'),
//                    'url'   => ['/resutoran/resu-media-option/'],
//                ],
                [
                    'icon'  => '<i class="fa fa-bars"></i>',
                    'label' => \Yii::t('resutoran', 'Payment'),
                    'url'   => ['/resutoran/resu-payment-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-bars"></i>',
                    'label' => \Yii::t('resutoran', 'Seating'),
                    'url'   => ['/resutoran/resu-seating-option/'],
                ],
            ],
        ],
    ],
]);
