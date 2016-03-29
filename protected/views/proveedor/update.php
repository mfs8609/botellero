<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->idProveedor=>array('view','id'=>$model->idProveedor),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Proveedores', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Proveedor', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Proveedor', 'url'=>array('view', 'id'=>$model->idProveedor)),
	array('label'=>Yii::t('app','Manage'). ' Proveedores', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Proveedor <?php echo $model->idProveedor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>