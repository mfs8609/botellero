<?php
/* @var $this CasaController */
/* @var $model Casa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCasa'); ?>
		<?php echo $form->textField($model,'idCasa',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manzana'); ?>
		<?php echo $form->textField($model,'idManzana',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'idNumero',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'citofono'); ?>
		<?php echo $form->textField($model,'citofono',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'servicio'); ?>
		<?php echo $form->textField($model,'servicio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('app','Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->