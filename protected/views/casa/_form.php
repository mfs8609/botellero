<?php
/* @var $this CasaController */
/* @var $model Casa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'casa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required.');?></p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'idManzana'); ?>
		<?php echo $form->dropDownList($model,'idManzana', CHtml::listData(Manzana::model()->findAll(), 'idManzana', 'manzana'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'idManzana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idNumero'); ?>
		<?php echo $form->dropDownList($model,'idNumero', CHtml::listData(Numero::model()->findAll(), 'idNumero', 'numero'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'idNumero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citofono'); ?>
		<?php echo $form->textField($model,'citofono',array('size'=>1,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'citofono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'servicio'); ?>
		<?php echo $form->dropDownList($model,'servicio',array(1 => 'SI', 0 => 'NO'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'servicio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->