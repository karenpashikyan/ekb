<?php

class Novostnaya_lentaController extends Controller
{
	///public $defaultAction = 'one';
      public function actions()
  	{
  		return array(
  			// captcha action renders the CAPTCHA image displayed on the contact page
  			'captcha'=>array(
  				'class'=>'CCaptchaAction',
  				'backColor'=>0xFFFFFF,
  			),

  		);
  	}
  	public function actionIndex()
  	{
      //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
      //         $models = Page::model()->findAllByAttributes(array('category_id'=>7));
      //         $category = Category::model()->findByPk($id);
  		// $this->render('index', array('models'=>$models, 'category'=>$category));
      $model = Page::model()->findByPk(23);

$this->render('view', array('model'=>$model));
  	}
    //       public function actionView($id)
  	// {
    //
  	// }

  }
