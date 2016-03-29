<?php
/* @var $this HabitanteController */
/* @var $model Habitante */

$options4 = array(
array('activo'=>'ACTIVO', 'descripcion'=>1), array('activo'=>'INACTIVO', 'descripcion'=>0),
);

$options3 = array(
array('genero'=>'MASCULINO', 'descripcion'=>'M'), array('genero'=>'FEMENINO', 'descripcion'=>'F'),
);

$options2 = array(
array('propietario'=>'SI', 'descripcion'=>1), array('propietario'=>'NO', 'descripcion'=>0),
);

$options = array(
array('idCasa'=>'A1', 'descripcion'=>1),
array('idCasa'=>'A2', 'descripcion'=>2),
array('idCasa'=>'A3', 'descripcion'=>3), 
array('idCasa'=>'A4', 'descripcion'=>4), 
array('idCasa'=>'A5', 'descripcion'=>5), 
array('idCasa'=>'A6', 'descripcion'=>6), 
array('idCasa'=>'A7', 'descripcion'=>7), 
array('idCasa'=>'A8', 'descripcion'=>8), 
array('idCasa'=>'A9', 'descripcion'=>9), 
array('idCasa'=>'A10', 'descripcion'=>10), 
array('idCasa'=>'B1', 'descripcion'=>11), 
array('idCasa'=>'B2', 'descripcion'=>12), 
array('idCasa'=>'B3', 'descripcion'=>13), 
array('idCasa'=>'B4', 'descripcion'=>14), 
array('idCasa'=>'B5', 'descripcion'=>15), 
array('idCasa'=>'B6', 'descripcion'=>16), 
array('idCasa'=>'B7', 'descripcion'=>17), 
array('idCasa'=>'B8', 'descripcion'=>18), 
array('idCasa'=>'B9', 'descripcion'=>19), 
array('idCasa'=>'B10', 'descripcion'=>20), 
array('idCasa'=>'C1', 'descripcion'=>21), 
array('idCasa'=>'C2', 'descripcion'=>22), 
array('idCasa'=>'C3', 'descripcion'=>23), 
array('idCasa'=>'C4', 'descripcion'=>24), 
array('idCasa'=>'C5', 'descripcion'=>25), 
array('idCasa'=>'C6', 'descripcion'=>26), 
array('idCasa'=>'C7', 'descripcion'=>27), 
array('idCasa'=>'C8', 'descripcion'=>28), 
array('idCasa'=>'C9', 'descripcion'=>29), 
array('idCasa'=>'C10', 'descripcion'=>30), 
array('idCasa'=>'D1', 'descripcion'=>31), 
array('idCasa'=>'D2', 'descripcion'=>32), 
array('idCasa'=>'D3', 'descripcion'=>33), 
array('idCasa'=>'D4', 'descripcion'=>34), 
array('idCasa'=>'D5', 'descripcion'=>35), 
array('idCasa'=>'D6', 'descripcion'=>36),
array('idCasa'=>'D7', 'descripcion'=>37), 
array('idCasa'=>'D8', 'descripcion'=>38), 
array('idCasa'=>'D9', 'descripcion'=>39), 
array('idCasa'=>'D10', 'descripcion'=>40), 

);

$this->breadcrumbs=array(
	'Habitantes'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Habitantes', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Habitante', 'url'=>array('create')),
);

?>

<h1><?php echo Yii::t('app','Manage'); ?> Habitantes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'habitante-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idHabitante',
		'nombresHabitante',
		'apellidosHabitante',
		array('header'=>'Género','name'=>'genero','value'=>'$data->genero == "M" ? "MASCULINO": ($data->genero == "F" ? "FEMENINO": "None")','type'=>'text', 'filter'=>CHtml::listData($options3, 'genero', 'genero'),),		
		
		//'fechaNacimiento',
		array(
			'header' => 'Edad',
			'name' => 'fechaNacimiento',
			'value' => 'calculaEdad($data->fechaNacimiento)',
			),

		'numeroContactoHabitante',
		array('header'=>'Propietario','name'=>'propietario','value'=>'$data->propietario == 1 ? "SI": ($data->propietario == 0 ? "NO": "None")','type'=>'text', 'filter'=>CHtml::listData($options2, 'propietario', 'propietario'),),		
		array('header'=>'Actividad','name'=>'activo','value'=>'$data->activo == 1 ? "ACTIVO": ($data->activo == 0 ? "INACTIVO": "None")','type'=>'text', 'filter'=>CHtml::listData($options4, 'activo', 'activo'),),		
		array( 
			'header'=>'Casa', 
			'name'=>'idCasa', 
			'value' => '$data->idCasa == 1 ? "A1": 
			($data->idCasa == 2 ? "A2":
			($data->idCasa == 3 ? "A3":
			($data->idCasa == 4 ? "A4":
			($data->idCasa == 5 ? "A5":
			($data->idCasa == 6 ? "A6":
			($data->idCasa == 7 ? "A7":
			($data->idCasa == 8 ? "A8":
			($data->idCasa == 9 ? "A9":
			($data->idCasa == 10 ? "A10":
			($data->idCasa == 11 ? "B1":
			($data->idCasa == 12 ? "B2":
			($data->idCasa == 13 ? "B3":
			($data->idCasa == 14 ? "B4":
			($data->idCasa == 15 ? "B5":
			($data->idCasa == 16 ? "B6":
			($data->idCasa == 17 ? "B7":
			($data->idCasa == 18 ? "B8":
			($data->idCasa == 19 ? "B9":
			($data->idCasa == 20 ? "B10":
			($data->idCasa == 21 ? "C1":
			($data->idCasa == 22 ? "C2":
			($data->idCasa == 23 ? "C3":
			($data->idCasa == 24 ? "C4":
			($data->idCasa == 25 ? "C5":
			($data->idCasa == 26 ? "C6":
			($data->idCasa == 27 ? "C7":
			($data->idCasa == 28 ? "C8":
			($data->idCasa == 29 ? "C9":
			($data->idCasa == 30 ? "C10":
			($data->idCasa == 31 ? "D1":
			($data->idCasa == 32 ? "D2":
			($data->idCasa == 33 ? "D3":
			($data->idCasa == 34 ? "D4":
			($data->idCasa == 35 ? "D5":
			($data->idCasa == 36 ? "D6":
			($data->idCasa == 37 ? "D7":
			($data->idCasa == 38 ? "D8":
			($data->idCasa == 39 ? "D9":
			($data->idCasa == 40 ? "D10":
			"None")))))))))))))))))))))))))))))))))))))))','type'=>'text',
			'filter'=>CHtml::listData($options, 'idCasa', 'idCasa'), 
		),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); 

function calculaEdad($fecha)
{
	$datetime1 = new DateTime($fecha);
	$datetime2 = new DateTime();
	$diff = $datetime1->diff($datetime2);
	
	return $edad = $diff->y;

}



?>
