<?php
/* @var $this DetalleController */
/* @var $model Detalle */

$this->breadcrumbs=array(
	'Detalles'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Detalles', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Detalle', 'url'=>array('create')),
);

?>

<h1><?php echo Yii::t('app','Manage'); ?> Detalles</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detalle-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idDetalle',
		'idFactura',
		array ('name'=>'idProducto','value'=>'$data->producto->descripcion','type'=>'text',),
		//'idProducto',
		'cantidad',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
