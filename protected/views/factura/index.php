<?php
/* @var $this FacturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facturas',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create'). ' Factura', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage'). ' Facturas', 'url'=>array('admin')),
);
?>

<h1>Facturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
