<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factura-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required.');?></p>

	<?php echo $form->errorSummary(array_merge(array($model),$validatedMembers)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaVenta');?>

		<?php $this->widget ('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker',
                array(
                    'model'=>$model, //Model object
                    'attribute'=>'fechaVenta', //attribute name
                    'value'=>$model->fechaVenta,
                    'mode'=>'datetime', //use "time","date" or "datetime" (default)
                    'language'=>'es',
                    'options'=>array(
                            'regional'=>'es',
                            'autoSize'=>'true',
                            'dateFormat'=>'yy-mm-dd',
                            'timeformat'=>'hh:mm',
                            'changeMonth'=>'true',
							'changeYear'=>'true',
							'yearRange'=>'-10:+0',
                            //'ampm'=>'true',
                            'timeText'=>'Horario',
                            'hourText'=>'Hora',
                            'minuteText'=>'Minuto',

                        ) // jquery plugin options
            ));
        ?>

		<?php echo $form->error($model,'fechaVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idVendedor'); ?>
		<?php echo $form->dropDownList($model,'idVendedor', CHtml::listData(Vendedor::model()->findAll("activo=1"), 'idVendedor', 'FullName'), array('prompt' => 'SELECCIONAR')); ?>
		<?php echo $form->error($model,'idVendedor'); ?>
	</div>

	<!--Sección del label de subtotal-->

	<div class="row">
		<?php echo '<label> Subtotal </label>'?>
		<?php echo '<input id="subtotal" type="text" size="10" disabled value=0>'?>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$("input[id^='Detalle_cantidad']").on('change', function(){
				var selector = $(this).parent().parent().find("select");
				addSubtotal(selector.val(), $(this).val());
			});
		});
		function addSubtotal(id, cantidad){
			var precio = 0;
			$.get('../producto/precioproducto', {id}, function(data){
				var json = $.parseJSON(data);
				var subtotal = parseInt($("#subtotal").val());
				subtotal += json.precio*cantidad;
				$("#subtotal").val(subtotal);			
			});
		}
	</script>

	<?php
	// see http://www.yiiframework.com/doc/guide/1.1/en/form.table
	// Note: Can be a route to a config file too,
	//       or create a method 'getMultiModelForm()' in the member model

	$memberFormConfig = array(
		  'elements'=>array(

              'idProducto'=>array(
				'type'=>'dropdownlist',
				'items'=>CHtml::listData(Producto::model()->findAll(array('order'=>'descripcion ASC', 'condition'=>'activo=1')), 'idProducto', 'ProductoPrecio'),
			),

		  	'cantidad'=>array(
		  		'type'=>'text',
		  		'maxlength'=>40,
		  	),
		));

	  $this->widget('ext.multimodelform.MultiModelForm',array(
            'id' => 'id_member', //the unique widget id
            'addItemText' => 'Añadir',
            'removeText' => 'Eliminar',
            'removeConfirm' => 'Está seguro que desea eliminar este producto?',
            'formConfig' => $memberFormConfig, //the form configuration array
            'model' => $detalle, //instance of the form model
 
            //if submitted not empty from the controller,
            //the form will be rendered with validation errors
            'validatedItems' => $validatedMembers,
 
            //array of member instances loaded from db
            'data' => $detalle->findAll('idFactura=:idFactura', array(':idFactura'=>$model->idFactura)),
        ));
    ?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->