<?php

namespace resutoran\frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller for the `resutoran` frontend module
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
