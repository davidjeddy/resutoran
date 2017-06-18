<?php

namespace resutoran\frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller for the `resutoran` frontend module
 */
class SiteController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        // remove empty items

        echo '<pre>';
        echo \yii\helpers\VarDumper::dump(\Yii::$app->request->post(), 10, true);
        echo '</pre>';
        exit(1);
        return $this->render('index');
    }
}
