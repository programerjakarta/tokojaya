<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Penjualan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class TransaksiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        $model = new Penjualan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idpelanggan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

}
