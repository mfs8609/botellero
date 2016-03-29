<?php
/* @var $this VendedorController */
/* @var $model Vendedor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idVendedor'); ?>
		<?php echo $form->textField($model,'idVendedor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombresVendedor'); ?>
		<?php echo $form->textField($model,'nombresVendedor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellidosVendedor'); ?>
		<?php echo $form->textField($model,'apellidosVendedor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTipoDocumento'); ?>
		<?php echo $form->textField($model,'idTipoDocumento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroIdentificacion'); ?>
		<?php echo $form->textField($model,'numeroIdentificacion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaNacimiento'); ?>
		<?php echo $form->textField($model,'fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero'); ?>
		<?php echo $form->textField($model,'genero',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroContacto'); ?>
		<?php echo $form->textField($model,'numeroContacto',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaInicio'); ?>
		<?php echo $form->textField($model,'fechaInicio'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('app','Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->