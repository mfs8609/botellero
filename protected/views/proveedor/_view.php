<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */

if ($data->activo == 1)
	$response3 = 'ACTIVO';

if ($data->activo == 0)
	$response3 = 'INACTIVO';

?>

<div class="view">

	<?php if (Yii::app()->user->name=="admin")
	{ ?> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProveedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProveedor), array('view', 'id'=>$data->idProveedor)); ?>
	<br />

	<?php } ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombresProveedor')); ?>:</b>
	<?php echo CHtml::encode($data->nombresProveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroContactoProveedor')); ?>:</b>
	<?php echo CHtml::encode($data->numeroContactoProveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($response3); ?>
	<br />


</div>