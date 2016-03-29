<?php
/* @var $this DetalleController */
/* @var $model Detalle */

$this->breadcrumbs=array(
	'Detalles'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Detalles', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Detalles', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Detalle</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>