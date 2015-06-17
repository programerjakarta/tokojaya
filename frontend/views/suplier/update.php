<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Suplier */

$this->title = 'Update Suplier: ' . ' ' . $model->idsuplier;
$this->params['breadcrumbs'][] = ['label' => 'Supliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idsuplier, 'url' => ['view', 'id' => $model->idsuplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
