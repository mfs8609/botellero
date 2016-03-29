<?php
/* @var $this VendedorController */
/* @var $model Vendedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vendedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required.');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombresVendedor'); ?>
		<?php echo $form->textField($model,'nombresVendedor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombresVendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidosVendedor'); ?>
		<?php echo $form->textField($model,'apellidosVendedor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellidosVendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idTipoDocumento'); ?>
		<?php echo $form->dropDownList($model,'idTipoDocumento', CHtml::listData(Tipodocumento::model()->findAll(), 'idTipoDocumento', 'tipoDocumento'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'idTipoDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroIdentificacion'); ?>
		<?php echo $form->textField($model,'numeroIdentificacion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'numeroIdentificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
		
		<?php
			if ($model->fechaNacimiento!='') 
			{
		 		$model->fechaNacimiento=date('Y-m-d',strtotime($model->fechaNacimiento));
		 	}
		
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'model'=>$model,
		'attribute'=>'fechaNacimiento',
		'value'=>$model->fechaNacimiento,
		'language' => 'es',
		'htmlOptions' => array('readonly'=>"readonly"),
		 
		'options'=>array(

		'autoSize'=>'true',
		//'defaultDate'=>$model->fechaNacimiento,
		'dateFormat'=>'yy-mm-dd',
		'yearRange'=>'-150:+0',
		//'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
		//'buttonImageOnly'=>'true',
		//'buttonText'=>'fechaNacimiento',
		//'selectOtherMonths'=>'true',
		//'showAnim'=>'slide',
		'showButtonPanel'=>'true',
		//'showOn'=>'button',
		//'showOtherMonths'=>'true',
		'changeMonth'=>'true',
		'changeYear'=>'true',
		),
		)); ?>
		
		<?php echo $form->error($model,'fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->dropDownList($model,'genero',array('M' => 'MASCULINO', 'F' => 'FEMENINO'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroContacto'); ?>
		<?php echo $form->textField($model,'numeroContacto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'numeroContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
		
		<?php
			if ($model->fechaInicio!='') 
			{
		 		$model->fechaInicio=date('Y-m-d',strtotime($model->fechaInicio));
		 	}
		
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		'model'=>$model,
		'attribute'=>'fechaInicio',
		'value'=>$model->fechaInicio,
		'language' => 'es',
		'htmlOptions' => array('readonly'=>"readonly"),
		 
		'options'=>array(

		'autoSize'=>'true',
		//'defaultDate'=>$model->fechaInicio,
		'dateFormat'=>'yy-mm-dd',
		'yearRange'=>'-10:+0',
		//'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
		//'buttonImageOnly'=>'true',
		//'buttonText'=>'fechaInicio',
		//'selectOtherMonths'=>'true',
		//'showAnim'=>'slide',
		'showButtonPanel'=>'true',
		//'showOn'=>'button',
		//'showOtherMonths'=>'true',
		'changeMonth'=>'true',
		'changeYear'=>'true',
		),
		)); ?>

		<?php echo $form->error($model,'fechaInicio'); ?>
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