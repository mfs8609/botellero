<?php

class CasaController extends Controller
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

			array('allow',  // allow all user_error()s to perform 'index' and 'view' actions
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
		$model=new Casa;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Casa']))
		{
			$model->attributes=$_POST['Casa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idCasa));
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

		if(isset($_POST['Casa']))
		{
			$model->attributes=$_POST['Casa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idCasa));
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
        $model = new Casa('search');
        $model->unsetAttributes();  // clear any default values

        if ($_GET['Casa']['idManzana'] == 'A' or $_GET['Casa']['idManzana'] == 'a')
        	$_GET['Casa']['idManzana'] = 1;

        if ($_GET['Casa']['idManzana'] == 'B' or $_GET['Casa']['idManzana'] == 'b')
    	$_GET['Casa']['idManzana'] = 2;

        if ($_GET['Casa']['idManzana'] == 'C' or $_GET['Casa']['idManzana'] == 'c')
    	$_GET['Casa']['idManzana'] = 3;

        if ($_GET['Casa']['idManzana'] == 'D' or $_GET['Casa']['idManzana'] == 'd')
    	$_GET['Casa']['idManzana'] = 4;

    	if ($_GET['Casa']['servicio'] == 'si' or $_GET['Casa']['servicio'] == 'Si' or $_GET['Casa']['servicio'] == 'sI')
    		$_GET['Casa']['servicio'] = 'SI';

    	if ($_GET['Casa']['servicio'] == 'no' or $_GET['Casa']['servicio'] == 'No' or $_GET['Casa']['servicio'] == 'nO')
    		$_GET['Casa']['servicio'] = 'NO';

        if(isset($_GET['Casa']))
            $model->attributes=$_GET['Casa'];

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
		$model=new Casa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Casa']))
			$model->attributes=$_GET['Casa'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Casa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Casa::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Casa $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='casa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
