<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SuplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suplier-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Suplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idsuplier',
            'nmsuplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
