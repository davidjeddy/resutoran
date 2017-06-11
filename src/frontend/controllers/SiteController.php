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
        if (\Yii::$app->request->isPost) {
            $results = $this->search();
        }
        // remove empty items
        return $this->render('index');
    }

    /**
     *
     */
    private function search() {

    }
}
