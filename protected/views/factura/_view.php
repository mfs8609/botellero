<?php
/* @var $this FacturaController */
/* @var $data Factura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFactura')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFactura), array('view', 'id'=>$data->idFactura)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaVenta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVendedor')); ?>:</b>
	<?php echo CHtml::encode($data->vendedor->nombresVendedor); ?>
	<br />

</div>