<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required.');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioCosto'); ?>
		<?php echo $form->textField($model,'precioCosto'); ?>
		<?php echo $form->error($model,'precioCosto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioVenta'); ?>
		<?php echo $form->textField($model,'precioVenta'); ?>
		<?php echo $form->error($model,'precioVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaIngreso'); ?>
		
		<?php
			if ($model->fechaIngreso!='') 
			{
		 		$model->fechaIngreso=date('Y-m-d',strtotime($model->fechaIngreso));
		 	}
		
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'model'=>$model,
		'attribute'=>'fechaIngreso',
		'value'=>$model->fechaIngreso,
		'language' => 'es',
		//'htmlOptions' => array('readonly'=>"readonly"),
		 
		'options'=>array(

		'autoSize'=>'true',
		//'defaultDate'=>$model->fechaIngreso,
		'dateFormat'=>'yy-mm-dd',
		'yearRange'=>'-10:+0',
		//'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
		//'buttonImageOnly'=>'true',
		//'buttonText'=>'fechaIngreso',
		//'selectOtherMonths'=>'true',
		//'showAnim'=>'slide',
		'showButtonPanel'=>'true',
		//'showOn'=>'button',
		//'showOtherMonths'=>'true',
		'changeMonth'=>'true',
		'changeYear'=>'true',
		),
		)); ?>
		
		<?php echo $form->error($model,'fechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->dropDownList($model,'activo',array(1 => 'ACTIVO', 0 => 'INACTIVO'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->