<?php

class HabitanteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view'),
				'users'=>array('admin'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Habitante;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Habitante']))
		{
			$model->attributes=$_POST['Habitante'];
			//$model->nombresHabitante = strtoupper($model->nombresHabitante);
			$model->nombresHabitante = mb_strtoupper($model->nombresHabitante, 'UTF-8');
			//$model->apellidosHabitante = strtoupper($model->apellidosHabitante);
			$model->apellidosHabitante = mb_strtoupper($model->apellidosHabitante, 'UTF-8');
			if($model->save())
				$this->redirect(array('view','id'=>$model->idHabitante));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Habitante']))
		{
			$model->attributes=$_POST['Habitante'];
			//$model->nombresHabitante = strtoupper($model->nombresHabitante);
			$model->nombresHabitante = mb_strtoupper($model->nombresHabitante, 'UTF-8');
			//$model->apellidosHabitante = strtoupper($model->apellidosHabitante);
			$model->apellidosHabitante = mb_strtoupper($model->apellidosHabitante, 'UTF-8');
			if($model->save())
				$this->redirect(array('view','id'=>$model->idHabitante));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $model = new Habitante('search');
        $model->unsetAttributes();  // clear any default values

        if ($_GET['Habitante']['idCasa'] == 'a1')
        	$_GET['Habitante']['idCasa'] = 'A1';

        if ($_GET['Habitante']['idCasa'] == 'a2')
        	$_GET['Habitante']['idCasa'] = 'A2';

        if ($_GET['Habitante']['idCasa'] == 'a3')
        	$_GET['Habitante']['idCasa'] = 'A3';

        if ($_GET['Habitante']['idCasa'] == 'a4')
        	$_GET['Habitante']['idCasa'] = 'A4';

        if ($_GET['Habitante']['idCasa'] == 'a5')
        	$_GET['Habitante']['idCasa'] = 'A5';

        if ($_GET['Habitante']['idCasa'] == 'a6')
        	$_GET['Habitante']['idCasa'] = 'A6';

        if ($_GET['Habitante']['idCasa'] == 'a7')
        	$_GET['Habitante']['idCasa'] = 'A7';

        if ($_GET['Habitante']['idCasa'] == 'a8')
        	$_GET['Habitante']['idCasa'] = 'A8';

        if ($_GET['Habitante']['idCasa'] == 'a9')
        	$_GET['Habitante']['idCasa'] = 'A9';

        if ($_GET['Habitante']['idCasa'] == 'a10')
        	$_GET['Habitante']['idCasa'] = 'A10';

        if ($_GET['Habitante']['idCasa'] == 'b1')
        	$_GET['Habitante']['idCasa'] = 'B1';

        if ($_GET['Habitante']['idCasa'] == 'b2')
        	$_GET['Habitante']['idCasa'] = 'B2';

        if ($_GET['Habitante']['idCasa'] == 'b3')
        	$_GET['Habitante']['idCasa'] = 'B3';

        if ($_GET['Habitante']['idCasa'] == 'b4')
        	$_GET['Habitante']['idCasa'] = 'B4';

        if ($_GET['Habitante']['idCasa'] == 'b5')
        	$_GET['Habitante']['idCasa'] = 'B5';

        if ($_GET['Habitante']['idCasa'] == 'b6')
        	$_GET['Habitante']['idCasa'] = 'B6';

        if ($_GET['Habitante']['idCasa'] == 'b7')
        	$_GET['Habitante']['idCasa'] = 'B7';

        if ($_GET['Habitante']['idCasa'] == 'b8')
        	$_GET['Habitante']['idCasa'] = 'B8';

        if ($_GET['Habitante']['idCasa'] == 'b9')
        	$_GET['Habitante']['idCasa'] = 'B9';

        if ($_GET['Habitante']['idCasa'] == 'b10')
        	$_GET['Habitante']['idCasa'] = 'B10';

        if ($_GET['Habitante']['idCasa'] == 'c1')
        	$_GET['Habitante']['idCasa'] = 'C1';

        if ($_GET['Habitante']['idCasa'] == 'c2')
        	$_GET['Habitante']['idCasa'] = 'C2';

        if ($_GET['Habitante']['idCasa'] == 'c3')
        	$_GET['Habitante']['idCasa'] = 'C3';

        if ($_GET['Habitante']['idCasa'] == 'c4')
        	$_GET['Habitante']['idCasa'] = 'C4';

        if ($_GET['Habitante']['idCasa'] == 'c5')
        	$_GET['Habitante']['idCasa'] = 'C6';

        if ($_GET['Habitante']['idCasa'] == 'c7')
        	$_GET['Habitante']['idCasa'] = 'C7';

        if ($_GET['Habitante']['idCasa'] == 'c8')
        	$_GET['Habitante']['idCasa'] = 'C8';

        if ($_GET['Habitante']['idCasa'] == 'c9')
        	$_GET['Habitante']['idCasa'] = 'C9';

        if ($_GET['Habitante']['idCasa'] == 'c10')
        	$_GET['Habitante']['idCasa'] = 'C10';

        if ($_GET['Habitante']['idCasa'] == 'd1')
        	$_GET['Habitante']['idCasa'] = 'D1';

        if ($_GET['Habitante']['idCasa'] == 'd2')
        	$_GET['Habitante']['idCasa'] = 'D2';

        if ($_GET['Habitante']['idCasa'] == 'd3')
        	$_GET['Habitante']['idCasa'] = 'D4';

        if ($_GET['Habitante']['idCasa'] == 'd5')
        	$_GET['Habitante']['idCasa'] = 'D5';

        if ($_GET['Habitante']['idCasa'] == 'd6')
        	$_GET['Habitante']['idCasa'] = 'D6';

        if ($_GET['Habitante']['idCasa'] == 'd7')
        	$_GET['Habitante']['idCasa'] = 'D7';

        if ($_GET['Habitante']['idCasa'] == 'd8')
        	$_GET['Habitante']['idCasa'] = 'D8';

        if ($_GET['Habitante']['idCasa'] == 'd9')
        	$_GET['Habitante']['idCasa'] = 'D9';

        if ($_GET['Habitante']['idCasa'] == 'd10')
        	$_GET['Habitante']['idCasa'] = 'D10';

        if(isset($_GET['Habitante']))
            $model->attributes=$_GET['Habitante'];

        if(isset($_GET['ajax']) && $_GET['ajax']=='ajaxListView')   {
            $this->renderPartial('index',array(
                'dataProvider'=>$model,
            ));
        } else  {
            $this->render('index',array(
                'dataProvider'=>$model,
            ));
        }    
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Habitante('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Habitante']))
			$model->attributes=$_GET['Habitante'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Habitante the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Habitante::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Habitante $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='habitante-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
