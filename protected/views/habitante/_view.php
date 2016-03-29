<?php
/* @var $this HabitanteController */
/* @var $data Habitante */

$datetime1 = new DateTime($data->fechaNacimiento);
$datetime2 = new DateTime();
$diff = $datetime1->diff($datetime2);
$edad = $diff->y;

if ($data->activo == 1)
	$response3 = 'ACTIVO';

if ($data->activo == 0)
	$response3 = 'INACTIVO';

if ($data->genero == 'M')
	$response2 = 'MASCULINO';

if ($data->genero == 'F')
	$response2 = 'FEMENINO';

if ($data->propietario == 1)
	$response = 'SI';

if ($data->propietario == 0)
	$response = 'NO';

if ($data->idCasa == 1)
	$response1 = 'A1';

if ($data->idCasa == 2)
	$response1 = 'A2';

if ($data->idCasa == 3)
	$response1 = 'A3';

if ($data->idCasa == 4)
	$response1 = 'A4';

if ($data->idCasa == 5)
	$response1 = 'A5';

if ($data->idCasa == 6)
	$response1 = 'A6';

if ($data->idCasa == 7)
	$response1 = 'A7';

if ($data->idCasa == 8)
	$response1 = 'A8';

if ($data->idCasa == 9)
	$response1 = 'A9';

if ($data->idCasa == 10)
	$response1 = 'A10';

if ($data->idCasa == 11)
	$response1 = 'B1';

if ($data->idCasa == 12)
	$response1 = 'B2';

if ($data->idCasa == 13)
	$response1 = 'B3';

if ($data->idCasa == 14)
	$response1 = 'B4';

if ($data->idCasa == 15)
	$response1 = 'B5';

if ($data->idCasa == 16)
	$response1 = 'B6';

if ($data->idCasa == 17)
	$response1 = 'B7';

if ($data->idCasa == 18)
	$response1 = 'B8';

if ($data->idCasa == 19)
	$response1 = 'B9';

if ($data->idCasa == 20)
	$response1 = 'B10';

if ($data->idCasa == 21)
	$response1 = 'C1';	

if ($data->idCasa == 22)
	$response1 = 'C2';
	
if ($data->idCasa == 23)
	$response1 = 'C3';
	
if ($data->idCasa == 24)
	$response1 = 'C4';
	
if ($data->idCasa == 25)
	$response1 = 'C5';
	
if ($data->idCasa == 26)
	$response1 = 'C6';
	
if ($data->idCasa == 27)
	$response1 = 'C7';
	
if ($data->idCasa == 28)
	$response1 = 'C8';
	
if ($data->idCasa == 29)
	$response1 = 'C9';

if ($data->idCasa == 30)
	$response1 = 'C10';
	
if ($data->idCasa == 31)
	$response1 = 'D1';
	
if ($data->idCasa == 32)
	$response1 = 'D2';
	
if ($data->idCasa == 33)
	$response1 = 'D3';
	
if ($data->idCasa == 34)
	$response1 = 'D4';
	
if ($data->idCasa == 35)
	$response1 = 'D5';
	
if ($data->idCasa == 36)
	$response1 = 'D6';
	
if ($data->idCasa == 37)
	$response1 = 'D7';
	
if ($data->idCasa == 38)
	$response1 = 'D8';
	
if ($data->idCasa == 39)
	$response1 = 'D9';
	
if ($data->idCasa == 40)
	$response1 = 'D10';

?>

<div class="view">

	<?php if (Yii::app()->user->name=="admin")
	{ ?> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('idHabitante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idHabitante), array('view', 'id'=>$data->idHabitante)); ?>
	<br />

	<?php } ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombresHabitante')); ?>:</b>
	<?php echo CHtml::encode($data->nombresHabitante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidosHabitante')); ?>:</b>
	<?php echo CHtml::encode($data->apellidosHabitante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($response2); ?>
	<br />

	<?php if (Yii::app()->user->name=="admin")
	{ ?> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($edad); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroContactoHabitante')); ?>:</b>
	<?php echo CHtml::encode($data->numeroContactoHabitante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propietario')); ?>:</b>
	<?php echo CHtml::encode($response); ?>
	<br />

	<?php } ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($response3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCasa')); ?>:</b>
	<?php echo CHtml::encode($response1); ?>
	<br />

</div>