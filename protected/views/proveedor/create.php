<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Proveedores', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Proveedores', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Proveedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>