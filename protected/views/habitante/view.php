<?php
/* @var $this HabitanteController */
/* @var $model Habitante */

$datetime1 = new DateTime($model->fechaNacimiento);
$datetime2 = new DateTime();
$diff = $datetime1->diff($datetime2);
$edad = $diff->y;

if ($model->activo == 1)
	$response3 = 'ACTIVO';

if ($model->activo == 0)
	$response3 = 'INACTIVO';

if ($model->genero == 'M')
	$response2 = 'MASCULINO';

if ($model->genero == 'F')
	$response2 = 'FEMENINO';

if ($model->propietario == 1)
	$response = 'SI';

if ($model->propietario == 0)
	$response = 'NO';

if ($model->idCasa == 1)
	$response1 = 'A1';

if ($model->idCasa == 2)
	$response1 = 'A2';

if ($model->idCasa == 3)
	$response1 = 'A3';

if ($model->idCasa == 4)
	$response1 = 'A4';

if ($model->idCasa == 5)
	$response1 = 'A5';

if ($model->idCasa == 6)
	$response1 = 'A6';

if ($model->idCasa == 7)
	$response1 = 'A7';

if ($model->idCasa == 8)
	$response1 = 'A8';

if ($model->idCasa == 9)
	$response1 = 'A9';

if ($model->idCasa == 10)
	$response1 = 'A10';

if ($model->idCasa == 11)
	$response1 = 'B1';

if ($model->idCasa == 12)
	$response1 = 'B2';

if ($model->idCasa == 13)
	$response1 = 'B3';

if ($model->idCasa == 14)
	$response1 = 'B4';

if ($model->idCasa == 15)
	$response1 = 'B5';

if ($model->idCasa == 16)
	$response1 = 'B6';

if ($model->idCasa == 17)
	$response1 = 'B7';

if ($model->idCasa == 18)
	$response1 = 'B8';

if ($model->idCasa == 19)
	$response1 = 'B9';

if ($model->idCasa == 20)
	$response1 = 'B10';

if ($model->idCasa == 21)
	$response1 = 'C1';	

if ($model->idCasa == 22)
	$response1 = 'C2';
	
if ($model->idCasa == 23)
	$response1 = 'C3';
	
if ($model->idCasa == 24)
	$response1 = 'C4';
	
if ($model->idCasa == 25)
	$response1 = 'C5';
	
if ($model->idCasa == 26)
	$response1 = 'C6';
	
if ($model->idCasa == 27)
	$response1 = 'C7';
	
if ($model->idCasa == 28)
	$response1 = 'C8';
	
if ($model->idCasa == 29)
	$response1 = 'C9';

if ($model->idCasa == 30)
	$response1 = 'C10';
	
if ($model->idCasa == 31)
	$response1 = 'D1';
	
if ($model->idCasa == 32)
	$response1 = 'D2';
	
if ($model->idCasa == 33)
	$response1 = 'D3';
	
if ($model->idCasa == 34)
	$response1 = 'D4';
	
if ($model->idCasa == 35)
	$response1 = 'D5';
	
if ($model->idCasa == 36)
	$response1 = 'D6';
	
if ($model->idCasa == 37)
	$response1 = 'D7';
	
if ($model->idCasa == 38)
	$response1 = 'D8';
	
if ($model->idCasa == 39)
	$response1 = 'D9';
	
if ($model->idCasa == 40)
	$response1 = 'D10';

$this->breadcrumbs=array(
	'Habitantes'=>array('index'),
	$model->idHabitante,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Habitantes', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Habitante', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Habitante', 'url'=>array('update', 'id'=>$model->idHabitante)),
	array('label'=>Yii::t('app','Delete'). ' Habitante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idHabitante),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage'). ' Habitantes', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Habitante #<?php echo $model->idHabitante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idHabitante',
		'nombresHabitante',
		'apellidosHabitante',
		array(
	      'label' => 'Género',
	      'value' => $response2,
	    ),
		'fechaNacimiento',
		array(
	      'label' => 'Edad',
	      'value' => $edad,
	    ),
		'numeroContactoHabitante',
		array(
			'label' => 'Propietario',
			'value' => $response,
	    ),
		array(
	      'label' => 'Activo',
	      'value' => $response3,
	    ),
		array(
			'label' => 'Casa',
			'value' => $response1,
	    ),
	),
)); ?>
