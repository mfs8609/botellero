<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$options4 = array(
array('activo'=>'ACTIVO', 'descripcion'=>1), array('activo'=>'INACTIVO', 'descripcion'=>0),
);

$options3 = array(
array('genero'=>'MASCULINO', 'descripcion'=>'M'), array('genero'=>'FEMENINO', 'descripcion'=>'F'),
);

$this->breadcrumbs=array(
	'Vendedores'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Vendedores', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Vendedor', 'url'=>array('create')),
);

?>

<h1><?php echo Yii::t('app','Manage'); ?> Vendedores</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vendedor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idVendedor',
		'nombresVendedor',
		'apellidosVendedor',
		//array('header'=>'Tipo de Documento','name'=>'idTipoDocumento','value'=>'$data->tipodocumento->tipoDocumento','type'=>'text',),
		array(
			'header' => 'Tipo de documento',
        	'name' => 'idTipoDocumento',
			'value'=>'$data->tipodocumento->tipoDocumento',
			'filter' => CHtml::listData(TipoDocumento::model()->findAll(), 'idTipoDocumento', 'tipoDocumento'),
        ),
		'numeroIdentificacion',
		//'fechaNacimiento',
		array(
			'header' => 'Edad',
			'name' => 'fechaNacimiento',
			'value' => 'calculaEdad($data->fechaNacimiento)',
			),
		array('header'=>'Género','name'=>'genero','value'=>'$data->genero == "M" ? "MASCULINO": ($data->genero == "F" ? "FEMENINO": "None")','type'=>'text', 'filter'=>CHtml::listData($options3, 'genero', 'genero'),),
		'numeroContacto',
		'fechaInicio',
		/*array('header' => 'Fecha de inicio',
              'name' => 'fechaInicio',
              'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker',
              array('model'=>$model, 'attribute'=>'fechaInicio', 'language' => 'es', 'htmlOptions' => array('readonly'=>"readonly"),
            	'options'=>array(
					'autoSize'=>'true',
					'defaultDate'=>$model->fechaNacimiento,
					'dateFormat'=>'yy-mm-dd',
					'yearRange'=>'-50:+0',
					'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					'buttonImageOnly'=>'true',
					'buttonText'=>'fechaNacimiento',
					'selectOtherMonths'=>'true',
					'showAnim'=>'slide',
					'showButtonPanel'=>'true',
					'showOn'=>'button',
					'showOtherMonths'=>'true',
					'changeMonth'=>'true',
					'changeYear'=>'true',
					),
                ), true),
                ),*/
		array('header'=>'Actividad','name'=>'activo','value'=>'$data->activo == 1 ? "ACTIVO": ($data->activo == 0 ? "INACTIVO": "None")','type'=>'text', 'filter'=>CHtml::listData($options4, 'activo', 'activo'),),
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
