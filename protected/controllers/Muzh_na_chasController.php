<?php

class Muzh_na_chasController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(

			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
public function actionRegistration()
	{
		$model=new User;
                $model->scenario = 'registration';

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
                       /*
                        $sitting = Sitting::model()->findByPk(1);
                        if($sitting->defaultStatusUser ==0){
                            $models->ban = 0;
                        }else{
                            $models->ban = 1;
                        }
                         */
                        if($model->save()){
                             if($sitting->defaultStatusUser ==0){
                            Yii::app()->user->setFlash('registration','Вы можете авторизоваться.');

                        }else{
                           Yii::app()->user->setFlash('registration',' Ожидайте подтверждения админа.');

                        }
                            Yii::app()->user->setFlash('registration','Ожидайте подтверждения админа');

                        }
		}


		$this->render('registration',array(
			'model'=>$model,
		));
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
$this->pageTitle = $model->title;
	//	$b = Page::model()->findAll(array('order'=>'discription'));
	$b = Page::model()->findAll();
		$criteria = new CDbCriteria;
			 $criteria->limit = '1';
		$a = Page::model()->findAll($criteria);

		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index',  array('model'=>$b));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */

	 public function actionView($id)
{
			$model = Page::model()->findByPk($id);
			//  $model = Page::model()->findAllByAttributes($id);
		 }

	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Спасибо, за обращение.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
