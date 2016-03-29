<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedores'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Vendedores', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Vendedores', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Vendedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>