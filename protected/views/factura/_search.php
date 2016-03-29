<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFactura'); ?>
		<?php echo $form->textField($model,'idFactura',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaVenta'); ?>
		<?php echo $form->textField($model,'fechaVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idVendedor'); ?>
		<?php echo $form->textField($model,'idVendedor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('app','Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->