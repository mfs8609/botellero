<?php

class FacturaController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('admin'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create'),
				'users'=>array('admin','celador'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
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
        Yii::import('ext.multimodelform.MultiModelForm');
 
        $model = new Factura;
 
        $detalle = new Detalle;

        $validatedMembers = array();  //ensure an empty array
 
        if(isset($_POST['Factura']))
        {
            $model->attributes=$_POST['Factura'];
 
            if( //validate detail before saving the master
                MultiModelForm::validate($detalle,$validatedMembers,$deleteItems) &&
                $model->save()
               )
               {
                 //the value for the foreign key 'groupid'
                 $masterValues = array ('idFactura'=>$model->idFactura);
                 if (MultiModelForm::save($detalle,$validatedMembers,$deleteMembers,$masterValues))
                    $this->redirect(array('create','id'=>$model->idFactura));
                }
        }
 
        $this->render('create',array(
            'model'=>$model,
            //submit the member and validatedItems to the widget in the edit form
            'detalle'=>$detalle,
            'validatedMembers' => $validatedMembers,
        ));
    }
    
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
    {
        Yii::import('ext.multimodelform.MultiModelForm');
 
        $model=$this->loadModel($id); //the Group model
 
        $detalle = new Detalle;
        $validatedMembers = array(); //ensure an empty array
 
        if(isset($_POST['Factura']))
        {
            $model->attributes=$_POST['Factura'];
 
            //the value for the foreign key 'groupid'
            $masterValues = array ('idFactura'=>$model->idFactura);
 
            if( //Save the master model after saving valid members
                MultiModelForm::save($detalle,$validatedMembers,$deleteMembers,$masterValues) &&
                $model->save()
               )
                    $this->redirect(array('view','id'=>$model->idFactura));
        }
 
        $this->render('update',array(
            'model'=>$model,
            //submit the member and validatedItems to the widget in the edit form
            'detalle'=>$detalle,
            'validatedMembers' => $validatedMembers,
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
		$dataProvider=new CActiveDataProvider('Factura');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Factura('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Factura']))
			$model->attributes=$_GET['Factura'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Factura the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Factura::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Factura $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='factura-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
