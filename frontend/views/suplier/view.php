<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Suplier */

$this->title = $model->idsuplier;
$this->params['breadcrumbs'][] = ['label' => 'Supliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idsuplier], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idsuplier], [
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
            'idsuplier',
            'nmsuplier',
        ],
    ]) ?>

</div>
