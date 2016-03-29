<?php
/* @var $this ProductoController */
/* @var $model Producto */

if ($model->activo == 1)
  $response3 = 'ACTIVO';

if ($model->activo == 0)
  $response3 = 'INACTIVO';

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->idProducto,
);

$gananciaNeta = $model->precioVenta - $model->precioCosto;
$gananciaNeta =  "$" . number_format($gananciaNeta, 0, ",", ".");

//$porcentaje = "%";

$gananciaPorcentaje = (($model->precioVenta - $model->precioCosto)/$model->precioCosto)*100;
$gananciaPorcentaje = number_format($gananciaPorcentaje, 2, ",", ".") . "%";

$precioCosto = $model->precioCosto;
$precioVenta = $model->precioVenta;

$model->precioCosto = "$" . number_format($model->precioCosto, 0, ",", ".");
$model->precioVenta = "$" . number_format($model->precioVenta, 0, ",", ".");

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Productos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Producto', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Producto', 'url'=>array('update', 'id'=>$model->idProducto)),
	array('label'=>Yii::t('app','Delete'). ' Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProducto),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage'). ' Productos', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View'); ?> Producto #<?php echo $model->idProducto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProducto',
		'descripcion',
		'precioCosto',
		'precioVenta',
    array(
        'label' => 'Ganancia neta',
        'value' => $gananciaNeta,
      ),
      array(
        'label' => 'Ganancia porcentaje',
        'value' => $gananciaPorcentaje,
      ),
		'stock',
		'fechaIngreso',
		array(
        'label' => 'Activo',
        'value' => $response3,
      ),
    //'activo',
	),
)); 

$this->Widget('ext.highcharts.HighchartsWidget', array(
    'options' => array(
      // 'colors'=>array('#6AC36A', '#FFD148', '#0563FE', '#FF2F2F', '#000000'),
      'colors'=>array('#FFD148', '#0563FE', '#FF2F2F', '#000000'),
      'gradient' => array('enabled'=> true),
      'credits' => array('enabled' => false),
      'exporting' => array('enabled' => false),
      'chart' => array(
        'plotBackgroundColor' => '#ffffff',
        'plotBorderWidth' => null,
        'plotShadow' => false,
        'height' => 400,
      ),
      'title' => false,
      'tooltip' => array(
        // 'pointFormat' => '{series.name}: <b>{point.percentage}%</b>',
        // 'percentageDecimals' => 1,
        'formatter'=> 'js:function() { return this.point.name+":  <b>"+Math.round(this.point.percentage)+"</b>%"; }',
            //the reason it didnt work before was because you need to use javascript functions to round and refrence the JSON as this.<array>.<index> ~jeffrey
      ),
      'plotOptions' => array(
        'pie' => array(
          'allowPointSelect' => true,
          'cursor' => 'pointer',
          'dataLabels' => array(
            'enabled' => true,
            'color' => '#AAAAAA',
            'connectorColor' => '#AAAAAA',
          ),
          'showInLegend'=>true,
        )
      ),
      'series' => array(
        array(
          'type' => 'pie',
          'name' => 'Percentage',
          'data' => array(
            // array('Ready / Deployable', 15),
            array('Precio costo', (float) $precioCosto),
            array('Precio venta', (float) $precioVenta),
          ),
        ),
      ),
    )
  ));

?>
