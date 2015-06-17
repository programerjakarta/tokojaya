<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Kategoribarang */

$this->title = 'Create Kategoribarang';
$this->params['breadcrumbs'][] = ['label' => 'Kategoribarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategoribarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
