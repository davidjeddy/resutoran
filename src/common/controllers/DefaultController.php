<?php

namespace resutoran\common\controllers;

use yii\web\Controller;

/**
 * Default controller for the `resutoran` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        echo __CLASS__ . ' -> ' . __METHOD__;
        exit;
        return $this->render('index');
    }
}
