<?php

class RequestController extends Controller
{
    public $layout = '/layouts/column2';
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */


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
                'actions' => array('index', 'create', 'view'),
                'roles' => array('*'),
            ),
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'create', 'update', 'delete', 'view'),
                'roles' => array('5'),
            ),
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'create', 'update', 'delete', 'view'),
                'roles' => array('6'),
            ),

            array('deny',  // deny all users
                'users' => array(''),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }
    // public function actionContact()
    // {
    // 	$model=new ContactForm;
    // 	if(isset($_POST['ContactForm']))
    // 	{
    // 		$model->attributes=$_POST['ContactForm'];
    // 		if($model->validate())
    // 		{
    // 			$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
    // 			$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
    // 			$headers="From: $name <{$model->email}>\r\n".
    // 				"Reply-To: {$model->email}\r\n".
    // 				"MIME-Version: 1.0\r\n".
    // 				"Content-Type: text/plain; charset=UTF-8";
    //
    // 			mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
    // 			Yii::app()->user->setFlash('contact','Спасибо, мы ответим вам в будущем.');
    // 			$this->refresh();
    // 		}
    // 	}
    // 	$this->render('contact',array('model'=>$model));
    // }
    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Request;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
            // $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
            // $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
            // $headers="From: $name <{$model->email}>\r\n".
            // 	"Reply-To: {$model->email}\r\n".
            // 	"MIME-Version: 1.0\r\n".
            // 	"Content-Type: text/plain; charset=UTF-8";
            //
            // mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
            // Yii::app()->user->setFlash('contact','Спасибо, мы ответим вам в будущем.');
            // $this->refresh();
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
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
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    /**
     * Lists all models.
     */


    /**
     * Manages all models.
     */
    public function actionIndex()
    {
        $model = new Request('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Request']))
            $model->attributes = $_GET['Request'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Request the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Request::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Request $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'request-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
