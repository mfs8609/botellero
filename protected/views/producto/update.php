<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->idProducto=>array('view','id'=>$model->idProducto),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Productos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Producto', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Producto', 'url'=>array('view', 'id'=>$model->idProducto)),
	array('label'=>Yii::t('app','Manage'). ' Productos', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Producto <?php echo $model->idProducto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>