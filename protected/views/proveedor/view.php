<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

if ($model->activo == 1)
	$response3 = 'ACTIVO';

if ($model->activo == 0)
	$response3 = 'INACTIVO';

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->idProveedor,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Proveedores', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Proveedor', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Proveedor', 'url'=>array('update', 'id'=>$model->idProveedor)),
	array('label'=>Yii::t('app','Delete'). ' Proveedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProveedor),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage'). ' Proveedores', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Proveedor #<?php echo $model->idProveedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProveedor',
		'nombresProveedor',
		'descripcion',
		'numeroContactoProveedor',
		array(
	      'label' => 'Activo',
	      'value' => $response3,
	    ),
		//'activo',
	),
)); ?>
