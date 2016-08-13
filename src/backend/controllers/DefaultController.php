<?php

namespace resutoran\backend\controllers;

use yii\filters\VerbFilter;

/**
 * Default controller for the `resutoran` module
 */
class DefaultController extends \resutoran\backend\controllers\BaseController
{
    /**
     * @var null
     */
    protected $model = null;

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::classname(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
