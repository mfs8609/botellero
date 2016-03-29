<?php
/* @var $this DetalleController */
/* @var $model Detalle */

$this->breadcrumbs=array(
	'Detalles'=>array('index'),
	$model->idDetalle=>array('view','id'=>$model->idDetalle),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Detalles', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Detalle', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Detalle', 'url'=>array('view', 'id'=>$model->idDetalle)),
	array('label'=>Yii::t('app','Manage'). ' Detalles', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Detalle <?php echo $model->idDetalle; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>