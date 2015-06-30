<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KategoribarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategoribarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategoribarang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kategoribarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idkategoribarang',
            'kategoribarang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
