<?php
/* @var $this HabitanteController */
/* @var $model Habitante */

$this->breadcrumbs=array(
	'Habitantes'=>array('index'),
	$model->idHabitante=>array('view','id'=>$model->idHabitante),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Habitantes', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Habitante', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Habitante', 'url'=>array('view', 'id'=>$model->idHabitante)),
	array('label'=>Yii::t('app','Manage'). ' Habitantes', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Habitante <?php echo $model->idHabitante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>