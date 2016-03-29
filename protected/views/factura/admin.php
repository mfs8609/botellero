<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Facturas', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Factura', 'url'=>array('create')),
);

?>

<h1><?php echo Yii::t('app','Manage'); ?> Facturas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'factura-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idFactura',
		'fechaVenta',
		//'idVendedor',
		array(
			'header' => 'Vendedor',
        	'name' => 'idVendedor',
			'value'=>'$data->vendedor->nombresVendedor',
			'filter' => CHtml::listData(Vendedor::model()->findAll(), 'idVendedor', 'nombresVendedor'),
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
