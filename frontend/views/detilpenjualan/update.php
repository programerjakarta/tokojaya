<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Detilpenjualan */

$this->title = 'Update Detilpenjualan: ' . ' ' . $model->iddetilpenjualan;
$this->params['breadcrumbs'][] = ['label' => 'Detilpenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddetilpenjualan, 'url' => ['view', 'id' => $model->iddetilpenjualan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detilpenjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
