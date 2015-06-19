<?php

use yii\helpers\Html;;
use yii\helpers\ArrayHelper;
use frontend\models\Pelanggan;
use frontend\models\Barang;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;


/* @var $this yii\web\View */
/* @var $model frontend\models\Penjualan */
/* @var $form ActiveForm */
?>
<?php frontend\assets\MyAsset::register($this); ?>
<div class="transaksi-_form">

    <?php $form = ActiveForm::begin(); ?>

        <?php echo $form->field($model, 'tglpenjualan')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
        ]
        ]); ?>
        <?= $form->field($model, 'jmlbarang') ?>
        <?= $form->field($model, 'ttlbayar') ?>

    <?php echo $form->field($model, 'idpelanggan')->dropDownList(ArrayHelper::map(Pelanggan::find()->all(), 'idpelanggan', 'pelanggancol')); ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- transaksi-_form -->
