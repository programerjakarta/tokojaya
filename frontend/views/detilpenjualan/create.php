<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Detilpenjualan */

$this->title = 'Create Detilpenjualan';
$this->params['breadcrumbs'][] = ['label' => 'Detilpenjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detilpenjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
