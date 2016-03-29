<?php
/* @var $this CasaController */
/* @var $model Casa */

if ($model->servicio == 1)
	$response = 'SI';
else
	$response = 'NO';

$this->breadcrumbs=array(
	'Casas'=>array('index'),
	$model->idCasa,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Casas', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Casa', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Casa', 'url'=>array('update', 'id'=>$model->idCasa)),
	array('label'=>Yii::t('app','Delete'). ' Casa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCasa),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage'). ' Casas', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Casa #<?php echo $model->idCasa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCasa',
		'manzana.manzana',
		'numero.numero',
		'citofono',
		array(
	      'label' => 'Servicio',
	      'value' => $response,
	    ),
		//'servicio',
	),
)); ?>
