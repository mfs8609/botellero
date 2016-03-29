<?php
/* @var $this VendedorController */
/* @var $data Vendedor */

$datetime1 = new DateTime($data->fechaNacimiento);
$datetime2 = new DateTime();
$diff = $datetime1->diff($datetime2);
$edad = $diff->y;

if ($data->genero == 'M')
	$response1 = 'MASCULINO';

if ($data->genero == 'F')
	$response1 = 'FEMENINO';
	
if ($data->activo == 1)
	$response3 = 'ACTIVO';

if ($data->activo == 0)
	$response3 = 'INACTIVO';
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVendedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idVendedor), array('view', 'id'=>$data->idVendedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombresVendedor')); ?>:</b>
	<?php echo CHtml::encode($data->nombresVendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidosVendedor')); ?>:</b>
	<?php echo CHtml::encode($data->apellidosVendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->tipodocumento->tipoDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroIdentificacion')); ?>:</b>
	<?php echo CHtml::encode($data->numeroIdentificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($response1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroContacto')); ?>:</b>
	<?php echo CHtml::encode($data->numeroContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicio); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($response3); ?>
	<br />

</div>