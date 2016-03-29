<?php
/* @var $this CasaController */
/* @var $model Casa */

$this->breadcrumbs=array(
	'Casas'=>array('index'),
	$model->idCasa=>array('view','id'=>$model->idCasa),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Casas', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Casa', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Casa', 'url'=>array('view', 'id'=>$model->idCasa)),
	array('label'=>Yii::t('app','Manage'). ' Casas', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update'); ?> Casa <?php echo $model->idCasa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>