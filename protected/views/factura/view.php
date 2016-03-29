<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->idFactura,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Facturas', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Factura', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Factura', 'url'=>array('update', 'id'=>$model->idFactura)),
	array('label'=>Yii::t('app','Delete'). ' Factura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFactura),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage'). ' Facturas', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Factura #<?php echo $model->idFactura; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFactura',
		'fechaVenta',
		//'idVendedor',
		'vendedor.nombresVendedor',
	),
)); ?>
