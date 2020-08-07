<?php

class UslugiController extends Controller
{
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
            $models = Page::model()->findAllByAttributes(array('category_id'=>2));
            $category = Category::model()->findByPk($id);
		$this->render('index', array('models'=>$models, 'category'=>$category));
	}
  // public function actionZasor()
  // {
  //   //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
  //         $model = Page::model()->findByPk(12);
  //   $this->render('view', array('model'=>$model));
  // }
  public function actionMuzh_na_chas()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(7);
    $this->render('view', array('model'=>$model));
  }
  public function actionelEktrik()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(8);
    $this->render('view', array('model'=>$model));
  }
  public function actionPereezdy_pod_klyuch()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(14);
    $this->render('view', array('model'=>$model));
  }
  public function actionSantehnik()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(9);
    $this->render('view', array('model'=>$model));
  }
  public function actionSborka_mebeli()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(10);
    $this->render('view', array('model'=>$model));
  }
  public function actionUstanovka_dverey()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(11);
    $this->render('view', array('model'=>$model));
  }
  public function actionKlining()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(18);
    $this->render('view', array('model'=>$model));
  }
  public function actionUstranenie_zasora()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(12);
    $this->render('view', array('model'=>$model));
  }
  public function actionRemont_kvartir()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(13);
    $this->render('view', array('model'=>$model));
  }
  public function actionRemont_kompyuterov()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(15);
    $this->render('view', array('model'=>$model));
  }
  public function actionUstanovka_antenn()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(16);
    $this->render('view', array('model'=>$model));
  }
  public function actionNatyazhnye_potolki()
  {
    //$models = Page::find()->select(['title'])->where(['category_id' => $id])->indexBy('id')->column();
          $model = Page::model()->findByPk(17);
    $this->render('view', array('model'=>$model));
  }

        public function actionView($id)
	{
    //$model = Page::model()->findByAttributes(array('url'=>$url));
    // foreach ($model as $one){
    //    $array[] = array('label'=>$one->title, 'url'=>array('/uslugi/index/id/'.$one->id));
    // }
          $model = Page::model()->findByPk($id);
        $newComment = new Comment;
        if (Yii::app()->user->isGuest)
            $newComment->scenario = 'Guest';
        if(isset($_POST['Comment']))
        {
            $sitting = Sitting::model()->findByPk(1);
            $newComment->attributes=$_POST['Comment'];
            $newComment->page_id=$model->id;
            if($sitting->defaultStatusComment==0){
                            $newComment->status=0;
                        }else{
                            $newComment->status=1;
                        }
            if($newComment->save()){
                             if($sitting->defaultStatusComment==0){
                            Yii::app()->user->setFlash('comment','Ждите подтверждения комментария.');

                        }else{
                           Yii::app()->user->setFlash('comment',' Ваш комментарий опубликован.');

                        }
                        $this->refresh();
        }

       }
        if(Yii::app()->user->isGuest)
        $newComment->scenario = 'Guest';
		$this->render('view', array('model'=>$model, 'newComment'=>$newComment));
	}

}
