<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Model;
use frontend\models\Penjualan;
use frontend\models\PenjualanSearch;
use frontend\models\Detilpenjualan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class TransaksiController extends \yii\web\Controller
{

    public $defaultAction = 'create';

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Penjualan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenjualanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penjualan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Penjualan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $modelPenjualan = new Penjualan;
        $modelsDetil = [new Detilpenjualan];
        if ($modelPenjualan->load(Yii::$app->request->post())) {

            $modelsDetil = Model::createMultiple(Detilpenjualan::classname());
            Model::loadMultiple($modelsDetil, Yii::$app->request->post());

            // validate all models
            $modelPenjualan->tglpenjualan = date('Y-m-d H:i:s', strtotime('-7 Hours'));
            $valid = $modelPenjualan->validate();
            $valid = Model::validateMultiple($modelsDetil) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $modelPenjualan->save(false)) {
                        foreach ($modelsDetil as $modelDetil) {
                            $modelPenjualan->jmlbarang = $modelPenjualan->jmlbarang + $modelDetil->jmlbarang;
                            $modelPenjualan->ttlbayar = $modelPenjualan->ttlbayar + ($modelDetil->hrgsatuan*$modelDetil->jmlbarang);
                            $modelDetil->idpenjualan = $modelPenjualan->idpenjualan;
                            if (! ($flag = $modelDetil->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                            $modelPenjualan->save(false);
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $modelPenjualan->idpenjualan]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('create', [
            'modelPenjualan' => $modelPenjualan,
            'modelsDetil' => (empty($modelsDetil)) ? [new Detilpenjualan] : $modelsDetil
        ]);
    }

    /**
     * Updates an existing Penjualan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idpenjualan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Penjualan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Penjualan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Penjualan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penjualan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
