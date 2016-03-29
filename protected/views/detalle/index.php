<?php
/* @var $this DetalleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalles',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create'). ' Detalle', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage'). ' Detalles', 'url'=>array('admin')),
);
?>

<h1>Detalles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
