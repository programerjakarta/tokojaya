<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kategoribarang */

$this->title = 'Update Kategoribarang: ' . ' ' . $model->idkategoribarang;
$this->params['breadcrumbs'][] = ['label' => 'Kategoribarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idkategoribarang, 'url' => ['view', 'id' => $model->idkategoribarang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategoribarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
