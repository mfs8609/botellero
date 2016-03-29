<?php
/* @var $this HabitanteController */
/* @var $model Habitante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'habitante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required.');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombresHabitante'); ?>
		<?php echo $form->textField($model,'nombresHabitante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombresHabitante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidosHabitante'); ?>
		<?php echo $form->textField($model,'apellidosHabitante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellidosHabitante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->dropDownList($model,'genero',array('M' => 'MASCULINO', 'F' => 'FEMENINO'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'genero'); ?>
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
		<?php echo $form->labelEx($model,'numeroContactoHabitante'); ?>
		<?php echo $form->textField($model,'numeroContactoHabitante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'numeroContactoHabitante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propietario'); ?>
		<?php echo $form->dropDownList($model,'propietario',array(1 => 'SI', 0 => 'NO'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'propietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->dropDownList($model,'activo',array(1 => 'ACTIVO', 0 => 'INACTIVO'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCasa'); ?>
		<?php echo $form->dropDownList($model,'idCasa', array(
		1 => 'A1', 
		2 => 'A2',
		3 => 'A3',
		4 => 'A4',
		5 => 'A5',
		6 => 'A6',
		7 => 'A7',
		8 => 'A8',
		9 => 'A9',
		10 => 'A10',
		11 => 'B1',
		12 => 'B2',
		13 => 'B3',
		14 => 'B4',
		15 => 'B5',
		16 => 'B6',
		17 => 'B7',
		18 => 'B8',
		19 => 'B9',
		20 => 'B10',
		21 => 'C1',
		22 => 'C2',
		23 => 'C3',
		24 => 'C4',
		25 => 'C5',
		26 => 'C6',
		27 => 'C7',
		28 => 'C8',
		29 => 'C9',
		30 => 'C10',
		31 => 'D1',
		32 => 'D2',
		33 => 'D3',
		34 => 'D4',
		35 => 'D5',
		36 => 'D6',
		37 => 'D7',
		38 => 'D8',
		39 => 'D9',
		40 => 'D10'
		), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'idCasa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->