<?php
/* @var $this CasaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Casas',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create'). ' Casa', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage'). ' Casas', 'url'=>array('admin')),
);
?>

<h1>Casas</h1>

<!--

<?php 
/* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/
?>

-->

<div class="form">
    <?php echo CHtml::beginForm('', 'get', array('id'=>'searchform')); ?>
    
     <div class="row">
        <?php echo CHtml::activeLabel($dataProvider,'idManzana'); ?>
        <?php echo CHtml::activeTextField($dataProvider,'idManzana') ?>
    </div>

	<div class="row">
        <?php echo CHtml::activeLabel($dataProvider,'idNumero'); ?>
        <?php echo CHtml::activeTextField($dataProvider,'idNumero') ?>
    </div>    
    
    <div class="row">
        <?php echo CHtml::activeLabel($dataProvider,'servicio'); ?>
        <?php echo CHtml::activeTextField($dataProvider,'servicio') ?>
    </div>
  
    <?php //echo CHtml::submitButton(Yii::t('app','Search')); ?>

    <?php echo CHtml::endForm(); ?>

</div><!-- form -->

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider->search(),
    'itemView'=>'_view',
        'enableHistory' => TRUE,
        'pagerCssClass' => "pagination",
        'id' => 'ajaxListView',
)); ?>

<?php
Yii::app()->clientScript->registerScript('search',
"$('#searchform').change(function(event) {
            SearchFunc();
            return false;
});
jQuery('input').keydown(function (event) {
    if (event.keyCode && event.keyCode == '13') {
        SearchFunc();
        return false;
    } else {
        return true;
    }
});
function SearchFunc()   {
    var data = $('input').serialize();
    var url = document.URL;
    var params = $.param(data);
    url = url.substr(0, url.indexOf('?'));
    window.History.pushState(null, document.title,$.param.querystring(url, data));
}
");
?>
