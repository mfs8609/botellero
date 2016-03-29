<?php
/* @var $this DetalleController */
/* @var $model Detalle */

$this->breadcrumbs=array(
	'Detalles'=>array('index'),
	$model->idDetalle,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Detalles', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Detalle', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Detalle', 'url'=>array('update', 'id'=>$model->idDetalle)),
	array('label'=>Yii::t('app','Delete'). ' Detalle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDetalle),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage'). ' Detalles', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Detalle #<?php echo $model->idDetalle; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDetalle',
		'idFactura',
		'producto.descripcion',
		//'idProducto',
		'cantidad',
	),
)); ?>
