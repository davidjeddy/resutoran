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
            'icon'      => '<i class="fa fa-star"></i>',
            'label'     => \Yii::t('resutoran', 'New Review'),
            'url'       => ['/resutoran/resu-location/create'],
        ],
        [
            'icon'      => '<i class="fa fa-star-o"></i>',
            'label'     => \Yii::t('resutoran', 'Past Review'),
            'url'       => ['/resutoran/resu-location/index'],
        ],
        [
            'icon'      => '<i class="fa fa-bars"></i>',
            'label'     => \Yii::t('resutoran', 'Location'),
            'options'   => ['class' => 'active'],
            'url'       => ['#'],
            'items'     => [
                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Contact'),
                    'url'       => ['/resutoran/resu-contact'],
                ],
                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Franchise'),
                    'url'       => ['/resutoran/resu-franchise'],
                ],

                [
                    'icon'      => '<i class="fa fa-bars"></i>',
                    'label'     => \Yii::t('resutoran', 'Map'),
                    'url'       => ['/resutoran/resu-map'],
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
                            'label' => \Yii::t('resutoran', 'Service'),
                            'url'   => ['/resutoran/resu-service-option/'],
                        ],
                        [
                            'icon'  => '<i class="fa fa-angle-double-right"></i>',
                            'label' => \Yii::t('resutoran', 'Alcohol'),
                            'url'   => ['/resutoran/resu-alcohol-option/'],
                        ],
                        [
                            'icon'  => '<i class="fa fa-angle-double-right"></i>',
                            'label' => \Yii::t('resutoran', 'Speciality Menu'),
                            'url'   => ['/resutoran/resu-speciality-menu-option/'],
                        ],
                    ]
                ]
            ]
        ]
    ]
]);
