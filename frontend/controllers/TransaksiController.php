<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Penjualan;
use frontend\models\Detilpenjualan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class TransaksiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // $model = [
        //     'username' => 'arif'
        // ];
        return $this->render('index', [
             'model' => $model,
            ]);
    }

    public function actionCreate()
    {
        $count = count(Yii::$app->request->post('Setting', []));
        $settings = [new Detilpenjualan()];
        for($i = 1; $i < $count; $i++) {
            $settings[] = new Detilpenjualan();
        }

     return $this->render('create', [
         // 'model' => $model,
        ]);

    }

}
