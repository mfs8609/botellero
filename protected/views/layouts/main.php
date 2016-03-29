<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('app','Home'), 'url'=>array('/site/index')),
				array('label'=>'Casas', 'url'=>array('/casa'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin" or Yii::app()->user->name=="celador")),
				array('label'=>'Habitantes', 'url'=>array('/habitante'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin" or Yii::app()->user->name=="celador")),
				array('label'=>'Vendedores', 'url'=>array('/vendedor'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin")),
				array('label'=>'Productos', 'url'=>array('/producto')),
				array('label'=>'Proveedores', 'url'=>array('/proveedor'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin" or Yii::app()->user->name=="celador")),
				array('label'=>'Facturas', 'url'=>array('/factura/create'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin" or Yii::app()->user->name=="celador")),
				array('label'=>'Detalles', 'url'=>array('/detalle'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin")),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Iniciar sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Cerrar sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::t('app','by'); ?> Julián Chávez Trujillo.<br/>
		<?php echo Yii::t('app','All Rights Reserved'); ?>.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
