<?php
/* @var $this CasaController */
/* @var $data Casa */

if ($data->servicio == 1)
	$response = 'SI';
else
	$response = 'NO';
?>

<div class="view">

	<?php if (Yii::app()->user->name=="admin")
	{ ?> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCasa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCasa), array('view', 'id'=>$data->idCasa)); ?>
	<br />

	<?php } ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('manzana')); ?>:</b>
	<?php echo CHtml::encode($data->manzana->manzana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citofono')); ?>:</b>
	<?php echo CHtml::encode($data->citofono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servicio')); ?>:</b>
	<?php echo CHtml::encode($response); ?>
	<br />


</div>