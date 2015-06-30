<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kategoribarang */

$this->title = $model->idkategoribarang;
$this->params['breadcrumbs'][] = ['label' => 'Kategoribarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategoribarang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idkategoribarang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idkategoribarang], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idkategoribarang',
            'kategoribarang',
        ],
    ]) ?>

</div>
