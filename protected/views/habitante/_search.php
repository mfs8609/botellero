<?php
/* @var $this HabitanteController */
/* @var $model Habitante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idHabitante'); ?>
		<?php echo $form->textField($model,'idHabitante',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombresHabitante'); ?>
		<?php echo $form->textField($model,'nombresHabitante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellidosHabitante'); ?>
		<?php echo $form->textField($model,'apellidosHabitante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero'); ?>
		<?php echo $form->textField($model,'genero',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroContactoHabitante'); ?>
		<?php echo $form->textField($model,'numeroContactoHabitante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propietario'); ?>
		<?php echo $form->textField($model,'propietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCasa'); ?>
		<?php echo $form->textField($model,'idCasa',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('app','Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->