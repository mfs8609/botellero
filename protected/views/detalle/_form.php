<?php
/* @var $this DetalleController */
/* @var $model Detalle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalle-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required.');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idFactura'); ?>
		<?php echo $form->dropDownList($model,'idFactura', CHtml::listData(Factura::model()->findAll(), 'idFactura', 'idFactura')); ?>
		<?php echo $form->error($model,'idFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idProducto'); ?>
		<?php echo $form->dropDownList($model,'idProducto', CHtml::listData(Producto::model()->findAll(), 'idProducto', 'descripcion')); ?>
		<?php echo $form->error($model,'idProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->