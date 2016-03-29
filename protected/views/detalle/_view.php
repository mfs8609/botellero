<?php
/* @var $this DetalleController */
/* @var $data Detalle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDetalle')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDetalle), array('view', 'id'=>$data->idDetalle)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFactura')); ?>:</b>
	<?php echo CHtml::encode($data->idFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::encode($data->producto->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />


</div>