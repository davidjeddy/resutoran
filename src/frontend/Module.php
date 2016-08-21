<?php

namespace resutoran\frontend;

/**
 * resutoran module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'resutoran\frontend\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();


        $this->layout = "@vendor/davidjeddy/yii2-resutoran/src/frontend/views/layouts/base";

        // load module FE menu into main menu area
    }
}
