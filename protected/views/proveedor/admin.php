<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$options4 = array(
array('activo'=>'ACTIVO', 'descripcion'=>1), array('activo'=>'INACTIVO', 'descripcion'=>0),
);

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Proveedores', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Proveedor', 'url'=>array('create')),
);

?>

<h1><?php echo Yii::t('app','Manage'); ?> Proveedores</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proveedor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idProveedor',
		'nombresProveedor',
		'descripcion',
		'numeroContactoProveedor',
		array('header'=>'Actividad','name'=>'activo','value'=>'$data->activo == 1 ? "ACTIVO": ($data->activo == 0 ? "INACTIVO": "None")','type'=>'text', 'filter'=>CHtml::listData($options4, 'activo', 'activo'),),		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
