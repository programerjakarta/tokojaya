<?php
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
/* @var $this yii\web\View */
?>
<?php 
$this->title = 'Input Transaksi Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
 ?>
<?php $form = ActiveForm::begin();
 ?>
<div class="table-responsive">
	<table class="table table-hover table-condensed table-stripped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Harga Satuan</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= Html::input('text', 'username', $user->name, ['class' => $username]) ?></td>
			</tr>
		</tbody>
	</table>
	<?php ActiveForm::end();
 ?>
</div>
