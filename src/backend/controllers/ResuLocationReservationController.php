<?php

namespace resutoran\backend\controllers;

use Yii;
use common\models\ResuLocationReservation;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResuLocationReservationController implements the CRUD actions for ResuLocationReservation model.
 */
class ResuLocationReservationController extends \resutoran\backend\controllers\BaseController
{
    /**
     * @var string
     */
    protected $model = '\resutoran\common\models\ResuLocationReservation';
}
