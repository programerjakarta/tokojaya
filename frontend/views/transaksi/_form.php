<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
/* @var $this yii\web\View */
/* @var $model frontend\models\Penjualan */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="penjualan-form">
	<?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<?= $form->field($modelPenjualan, 'idpelanggan')->textInput() ?>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Detiles</h4></div>
		<div class="panel-body">
			<?php DynamicFormWidget::begin([
			'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
			'widgetBody' => '.container-items', // required: css class selector
			'widgetItem' => '.item', // required: css class
			'limit' => 4, // the maximum times, an element can be cloned (default 999)
			'min' => 1, // 0 or 1 (default 1)
			'insertButton' => '.add-item', // css class
			'deleteButton' => '.remove-item', // css class
			'model' => $modelsDetil[0],
			'formId' => 'dynamic-form',
			'formFields' => [
			'idbarang',
			'jmlbarang',
			'hrgsatuan',
			],
			]); ?>
			<div class="container-items"><!-- widgetContainer -->
			<?php foreach ($modelsDetil as $i => $modelDetil): ?>
			<div class="item panel panel-default"><!-- widgetBody -->
			<div class="panel-heading">
				<h3 class="panel-title pull-left">Detil</h3>
				<div class="pull-right">
					<button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
					<button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<?php
				// necessary for update action.
				if (! $modelDetil->isNewRecord) {
				echo Html::activeHiddenInput($modelDetil, "[{$i}]id");
				}
				?>
				<?= $form->field($modelDetil, "[{$i}]idbarang")->textInput(['maxlength' => true]) ?>
				<div class="row">
					<div class="col-sm-6">
						<?= $form->field($modelDetil, "[{$i}]jmlbarang")->textInput(['maxlength' => true]) ?>
					</div>
					<div class="col-sm-6">
						<?= $form->field($modelDetil, "[{$i}]hrgsatuan")->textInput(['maxlength' => true]) ?>
					</div>
					</div><!-- .row -->
				</div>
				<?php endforeach; ?>
			</div>
			<?php DynamicFormWidget::end(); ?>
		</div>
		<div class="form-group">
			<?= Html::submitButton($modelPenjualan->isNewRecord ? 'Simpan' : 'Update', ['class' => $modelPenjualan->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>