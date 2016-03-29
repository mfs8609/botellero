<?php
/* @var $this HabitanteController */
/* @var $model Habitante */

$this->breadcrumbs=array(
	'Habitantes'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Habitantes', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Habitantes', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Habitante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>