<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Facturas', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Facturas', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Factura</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'detalle'=>$detalle, 'validatedMembers'=>$validatedMembers)); ?>