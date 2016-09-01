<?php

namespace resutoran\frontend;

use Yii;

/**
 * resutoran module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $layout = "@vendor/davidjeddy/yii2-resutoran/src/frontend/views/layouts/base";

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'resutoran\frontend\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {

        // load module FE menu into main menu area
    }
}
