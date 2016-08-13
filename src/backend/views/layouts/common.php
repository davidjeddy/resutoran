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
        [
            'label'     => \Yii::t('resutoran', 'Resutoran'),
            'options'   => ['class' => 'header']
        ],
        [
            'icon'      => '<i class="fa fa-bars"></i>',
            'label'     => \Yii::t('resutoran', 'Reviews'),
            'url'       => ['/resutoran/reviews'],
        ],
        [
            'icon'      => '<i class="fa fa-bars"></i>',
            'label'     => \Yii::t('resutoran', 'Options'),
            'url'       => ['#'],
            'items'     => [
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Ambiance'),
                    'url'   => ['/resutoran/resu-ambiance-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Boolean'),
                    'url'   => ['/resutoran/resu-boolean-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Cuisine'),
                    'url'   => ['/resutoran/resu-cuisine-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Decor'),
                    'url'   => ['/resutoran/resu-decor-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Dress Code'),
                    'url'   => ['/resutoran/resu-dress-code-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Hours'),
                    'url'   => ['/resutoran/resu-hours-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Media'),
                    'url'   => ['/resutoran/resu-media-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Menu'),
                    'url'   => ['/resutoran/resu-menu-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Payment'),
                    'url'   => ['/resutoran/resu-payment-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Price'),
                    'url'   => ['/resutoran/resu-price-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Reservation'),
                    'url'   => ['/resutoran/resu-reservation-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Seating'),
                    'url'   => ['/resutoran/resu-seating-option/'],
                ],
                [
                    'icon'  => '<i class="fa fa-angle-double-right"></i>',
                    'label' => \Yii::t('resutoran', 'Services'),
                    'url'   => ['/resutoran/resu-services-option/'],
                ],
            ]
        ],
    ]
]);
