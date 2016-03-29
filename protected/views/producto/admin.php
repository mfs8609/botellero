<?php
/* @var $this ProductoController */
/* @var $model Producto */

$options4 = array(
array('activo'=>'ACTIVO', 'descripcion'=>1), array('activo'=>'INACTIVO', 'descripcion'=>0),
);

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Productos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Producto', 'url'=>array('create')),
);

?>

<h1><?php echo Yii::t('app','Manage'); ?> Productos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'producto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idProducto',
		'descripcion',
		'precioCosto',
		'precioVenta',
		'stock',
		'fechaIngreso',
		array('header'=>'Actividad','name'=>'activo','value'=>'$data->activo == 1 ? "ACTIVO": ($data->activo == 0 ? "INACTIVO": "None")','type'=>'text', 'filter'=>CHtml::listData($options4, 'activo', 'activo'),),		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
