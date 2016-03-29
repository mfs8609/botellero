<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->idFactura=>array('view','id'=>$model->idFactura),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Facturas', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Factura', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Factura', 'url'=>array('view', 'id'=>$model->idFactura)),
	array('label'=>Yii::t('app','Manage'). ' Facturas', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Factura <?php echo $model->idFactura; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'detalle'=>$detalle, 'validatedMembers'=>$validatedMembers)); ?>