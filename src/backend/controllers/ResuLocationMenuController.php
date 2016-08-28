<?php

namespace resutoran\backend\controllers;

use Yii;
use common\models\ResuLocationMenu;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResuLocationMenuController implements the CRUD actions for ResuLocationMenu model.
 */
class ResuLocationMenuController extends \resutoran\backend\controllers\BaseController
{
    /**
     * @var string
     */
    protected $model = '\resutoran\common\models\ResuLocationMenu';
}
