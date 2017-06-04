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
    public $layout = "@vendor/davidjeddy/yii2-resutoran/src/frontend/views/layouts/base";

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'resutoran\frontend\controllers';
}
