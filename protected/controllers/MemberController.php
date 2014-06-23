<?php

class MemberController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/cmspage';

	public $menu=array(
		array('label'=>'会员列表', 'url'=>array('index')),
		array('label'=>'激活会员', 'url'=>array('create'))
	);

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
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
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
		$dlInfo = Dl::model()->find("id=:id", array(":id"=>$this->loadModel($id)->dl_id));
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dlInfo' => $dlInfo
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{

		$model=new Member;
		$origin_model = new MemberOrigin;
		$dl_model = new Dl;
		


		$origin_list = array();
		foreach($origin_model->findAll(array("select"=>"id, name")) as $_model) {
			$origin_list[$_model->attributes['id']] = $_model->attributes['name'];
		}

		$dlevel_model = new DlLevel;
		$dlevel_list = array();
		foreach($dlevel_model->findAll(array("select"=>"id, name")) as $_model) {
			$dlevel_list[$_model->attributes['id']] = $_model->attributes['name'];
		}
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Member']) && isset($_POST['Dl']))
		{
			$model->attributes=$_POST['Member'];
			$dl_model->attributes=$_POST['Dl'];
			if($dl_model->save()) {	//保存驾驶证数据
				$model->dl_id = $dl_model->id; //返回驾驶证id，保存在用户数据中
				if($model->save()){
					$this->redirect(array('view','id'=>$model->id));
				}
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'dl_model'=>$dl_model,
			'origin_list' =>$origin_list,
			'dlevel_list' => $dlevel_list
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
		$origin_model = new MemberOrigin;

		$dlInfo = Dl::model()->find("id=:id", array(":id"=>$model->dl_id));

		$origin_list = array();
		foreach($origin_model->findAll(array("select"=>"id, name")) as $_model) {
			$origin_list[$_model->attributes['id']] = $_model->attributes['name'];
		}

		$this->performAjaxValidation($model);
		
		if(isset($_POST['Member']))
		{
			$model->attributes=$_POST['Member'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		if($dlInfo == NULL) {
			$this->redirect(array('view','id'=>$model->id));
		}

		$dlevel_model = new DlLevel;
		$dlevel_list = array();
		foreach($dlevel_model->findAll(array("select"=>"id, name")) as $_model) {
			$dlevel_list[$_model->attributes['id']] = $_model->attributes['name'];
		}

		$this->render('update',array(
			'model'=>$model,
			'dl_model'=> $dlInfo,
			'origin_list' =>$origin_list,
			'dlevel_list' => $dlevel_list
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
		$criteria = new CDbCriteria;
		$dataProvider=new CActiveDataProvider('Member', array(
			'sort'=>array( 
	            'defaultOrder'=>'id DESC', 
	        ), 
	        'pagination'=>array( 
	            'pageSize'=>5 
	        )
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Member('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Member']))
			$model->attributes=$_GET['Member'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Member the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Member::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Member $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{

		if(isset($_POST['ajax']) && $_POST['ajax']==='member-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
