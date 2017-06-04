<?php

namespace resutoran\frontend\controllers;

use yii\web\Controller;

/**
 * Default controller for the `resutoran` frontend module
 */
class DefaultController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Address, range based, up to 50mi, DESC rate. Something similar to https://www.mapdevelopers.com/distance_from_to.php
     * cuisine exact
     * price exact
     */
    public function actionSearch()
    {
        if (!\Yii::$app->request->isPost || empty(\Yii::$app->request->getBodyParams()['search'])) {
            $this->redirect('index');
        }

        // convert form data
        $searchData = (object)\Yii::$app->request->getBodyParams()['search'];
        // create query model
        $query = new \yii\db\Query();
        $query
            ->select('*')
            ->from('resu_location');

        if ($searchData->cuisine) {
            $query
                ->leftJoin('resu_location_cuisine', 'resu_location_cuisine.resu_location_id = resu_location.id')
                ->andWhere(['resu_location_cuisine.id' => (int)$searchData->cuisine]);
        }

        if ($searchData->price) {
            $query
                ->leftJoin('resu_location_cuisine', 'resu_location_cuisine.resu_location_id = resu_location.id')
                ->andWhere(['resu_location_cuisine.id' => (int)$searchData->cuisine]);
        }

        if ($searchData->location) {

        }

        // return query results to view
        echo '<pre>';
        echo \yii\helpers\VarDumper::dump(\Yii::$app->request->getBodyParams(), 10, true);
        echo \yii\helpers\VarDumper::dump($query->all(), 10, true);
        echo '</pre>';
        exit(1);

        // return viewModel to results view
        return $this->render('results',[
            'viewModel' => $query->all(), // exec query
        ]);

    }
}
