<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$datetime1 = new DateTime($model->fechaNacimiento);
$datetime2 = new DateTime();
$diff = $datetime1->diff($datetime2);
$edad = $diff->y;

if ($model->activo == 1)
	$response3 = 'ACTIVO';

if ($model->activo == 0)
	$response3 = 'INACTIVO';

if ($model->genero == 'M')
	$response = 'MASCULINO';
else
	$response = 'FEMENINO';

$this->breadcrumbs=array(
	'Vendedores'=>array('index'),
	$model->idVendedor,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Vendedores', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Vendedor', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Vendedor', 'url'=>array('update', 'id'=>$model->idVendedor)),
	array('label'=>Yii::t('app','Delete'). ' Vendedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVendedor),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage'). ' Vendedores', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Vendedor #<?php echo $model->idVendedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVendedor',
		'nombresVendedor',
		'apellidosVendedor',
		'tipodocumento.tipoDocumento',
		'numeroIdentificacion',
		'fechaNacimiento',
		array(
	      'label' => 'Edad',
	      'value' => $edad,
	    ),
		array(
	      'label' => 'Género',
	      'value' => $response,
	    ),
		//'genero',
		'numeroContacto',
		'fechaInicio',
		array(
	      'label' => 'Activo',
	      'value' => $response3,
	    ),
	),
)); ?>
