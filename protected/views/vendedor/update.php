<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedors'=>array('index'),
	$model->idVendedor=>array('view','id'=>$model->idVendedor),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Vendedores', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Vendedor', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Vendedor', 'url'=>array('view', 'id'=>$model->idTipoDocumento)),
	array('label'=>Yii::t('app','Manage'). ' Vendedores', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Vendedor <?php echo $model->idVendedor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>