<?php
/* @var $this ProductoController */
/* @var $data Producto */

if ($data->activo == 1)
	$response3 = 'ACTIVO';

if ($data->activo == 0)
	$response3 = 'INACTIVO';

$data->precioCosto = "$" . number_format($data->precioCosto, 0, ",", ".");
$data->precioVenta = "$" . number_format($data->precioVenta, 0, ",", ".");

?>

<div class="view">

	<?php if (Yii::app()->user->name=="admin")
	{ ?> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProducto), array('view', 'id'=>$data->idProducto)); ?>
	<br />

	<?php } ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<?php if (Yii::app()->user->name=="admin")
	{ ?> 

		<b><?php echo CHtml::encode($data->getAttributeLabel('precioCosto')); ?>:</b>
		<?php echo CHtml::encode($data->precioCosto); ?>
		<br />

	<?php } ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioVenta')); ?>:</b>
	<?php echo CHtml::encode($data->precioVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<?php if (Yii::app()->user->name=="admin")
	{ ?> 
		<b><?php echo CHtml::encode($data->getAttributeLabel('fechaIngreso')); ?>:</b>
		<?php echo CHtml::encode($data->fechaIngreso); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
		<?php echo CHtml::encode($response3); ?>
		<br />

	<?php } ?>

</div>