<?php

class SittingController extends Controller
{
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
				'roles'=>array('*'),
			),
		array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'roles'=>array('3'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
		public function actionIndex()
	{
		$model=  Sitting::model()->findByPk(1);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sitting']))
		{
			$model->attributes=$_POST['Sitting'];
                        if($model->save()){
                          Yii::app()->user->setFlash('sitting','Сохранения удачны.');
				  
                        }
				$this->redirect(array('index'));
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
}