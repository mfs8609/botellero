<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Productos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Productos', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Producto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>