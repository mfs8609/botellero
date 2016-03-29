<?php
/* @var $this CasaController */
/* @var $model Casa */

$options = array(
array('servicio'=>'SI', 'descripcion'=>1), array('servicio'=>'NO', 'descripcion'=>0),
);

$this->breadcrumbs=array(
	'Casas'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Casas', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Casa', 'url'=>array('create')),
);

?>

<h1><?php echo Yii::t('app','Manage'); ?> Casas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'casa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idCasa',
		//array ('header'=>'Manzana','name'=>'idManzana','value'=>'$data->manzana->manzana','type'=>'text',),
		array(
			'header' => 'Manzana',
        	'name' => 'idManzana',
			'value'=>'$data->manzana->manzana',
			'filter' => CHtml::listData(Manzana::model()->findAll(), 'idManzana', 'manzana'),
        ),
		//array ('header'=>'Número','name'=>'idNumero','value'=>'$data->numero->numero','type'=>'text',),
		array(
			'header' => 'Número',
        	'name' => 'idNumero',
			'value'=>'$data->numero->numero',
			'filter' => CHtml::listData(Numero::model()->findAll(), 'idNumero', 'numero'),
        ),
		'citofono',
		//array ('header'=>'Servicio','name'=>'servicio','value'=>'$data->servicio == 1 ? "SI": ($data->servicio == 0 ? "NO": "None")','type'=>'text',
		array( 
			'header'=>'Servicio', 
			'name'=>'servicio', 
			'value' => '$data->servicio == 1 ? "SI": ($data->servicio == 0 ? "NO": "None")','type'=>'text',
			'filter'=>CHtml::listData($options, 'servicio', 'servicio'), 
		),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
