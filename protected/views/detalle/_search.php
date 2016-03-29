<?php
/* @var $this DetalleController */
/* @var $model Detalle */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDetalle'); ?>
		<?php echo $form->textField($model,'idDetalle',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idFactura'); ?>
		<?php echo $form->textField($model,'idFactura',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProducto'); ?>
		<?php echo $form->textField($model,'idProducto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('app','Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->