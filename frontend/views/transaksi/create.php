<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Suplier */

$this->title = 'Input Transaksi Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

