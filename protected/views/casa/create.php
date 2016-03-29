<?php
/* @var $this CasaController */
/* @var $model Casa */

$this->breadcrumbs=array(
	'Casas'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Casas', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Casas', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create'); ?> Casa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>