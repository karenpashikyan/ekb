<?php

/**
 * This is the model class for table "{{category}}".
 *
 * The followings are the available columns in table '{{category}}':
 * @property integer $id
 * @property string $title
 * @property string $position
 * @property integer $parent_id
 */
class Category extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, position', 'required'),
			array('parent_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>50),
			array('position', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, position, parent_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		                    'category'=>array(self::BELONGS_TO,'Category','category_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Наименование',
			'position' => 'Позиционирование',
			'parent_id' => 'Категория вложенности',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('parent_id',$this->parent_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	       public static function all()
	{

              return CHtml::listData(self::model()->findAll(), 'id','title');
	}


         public static function menu($position)
	{
		$models=  self::model()->findAllByAttributes(array('position' => $position));
                $array= array();
                if($position=='ekb'){
                    $array[]= array('label'=>'Главная', 'url'=>"/");
										$array[]= array('label'=>'Услуги', 'url'=>array('/uslugi'));

                }
								if($position=='ekbm'){
										$array[]= array('label'=>'Главная', 'url'=>"/");

											$array[]= array('label'=>'Услуги', 'url'=>array('/uslugi'));
										$array[]= array('label'=>'Прайс', 'url'=>array('/price_mob'));
								}
								if($position=='	moscow'){
										$array[]= array('label'=>'Главная', 'url'=>"/");
										$array[]= array('label'=>'Прайс', 'url'=>array('/price'));
								}
								if($position=='mosm'){
										$array[]= array('label'=>'Главная', 'url'=>"/");
										$array[]= array('label'=>'Прайс', 'url'=>array('/price'));
								}
								// for ($i=0; $i < 12; $i++) {
								// 	   $array[] = array('label'=>$models[$i]->title, 'url'=>array('/uslugi/index/url/'.$models[$i]->url));
								// }
                // foreach ($models as $one){
                //    $array[] = array('label'=>$one->title, 'url'=>array('/uslugi'.$one->id));
                // }

                if($position=='ekb'){
										$array[]= array('label'=>'Прайс', 'url'=>array('/price'));
$array[]= array('label'=>'Галерея',  'url'=>array('/gallery'));
						$array[]= array('label'=>'Подать заявку',  'url'=>array('/zayavka'));


                    $array[]= array('label'=>'Вход', 'url'=>array('/muzh_na_chas/login'), 'visible'=>Yii::app()->user->isGuest);
		  $array[]= array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/muzh_na_chas/logout'), 'visible'=>!Yii::app()->user->isGuest);

		  $array[]= array('label'=>'Регистрация', 'url'=>array('/muzh_na_chas/registration'), 'visible'=>Yii::app()->user->isGuest);
			  $array[]= array('label'=>'Контакты', 'url'=>array('/muzh_na_chas/contact'), 'visible'=>Yii::app()->user->isGuest);

if(Yii::app()->user->checkAccess('2')){
    $array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('3')){
    $array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('4')){
    $array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('5')){
    $array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
                }

								if($position=='ekbm'){
$array[]= array('label'=>'Галерея',  'url'=>array('/gallery'));
						$array[]= array('label'=>'Подать заявку',  'url'=>array('/zayavka'));

										$array[]= array('label'=>'Вход', 'url'=>array('/muzh_na_chas/login'), 'visible'=>Yii::app()->user->isGuest);
			$array[]= array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/muzh_na_chas/logout'), 'visible'=>!Yii::app()->user->isGuest);

			$array[]= array('label'=>'Регистрация', 'url'=>array('/muzh_na_chas/registration'), 'visible'=>Yii::app()->user->isGuest);
				$array[]= array('label'=>'Контакты', 'url'=>array('/muzh_na_chas/contact'), 'visible'=>Yii::app()->user->isGuest);

if(Yii::app()->user->checkAccess('2')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('3')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('4')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('5')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
								}
								if($position=='	moscow'){
$array[]= array('label'=>'Галерея', 'url'=>array('/gallery'), 'visible'=>Yii::app()->user->isGuest);

					$array[]= array('label'=>'Подать заявку', 'url'=>array('/zayavka'), 'visible'=>Yii::app()->user->isGuest);


										$array[]= array('label'=>'Вход', 'url'=>array('/muzh_na_chas/login'), 'visible'=>Yii::app()->user->isGuest);
			$array[]= array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/muzh_na_chas/logout'), 'visible'=>!Yii::app()->user->isGuest);

			$array[]= array('label'=>'Регистрация', 'url'=>array('/muzh_na_chas/registration'), 'visible'=>Yii::app()->user->isGuest);
				$array[]= array('label'=>'Контакты', 'url'=>array('/muzh_na_chas/contact'), 'visible'=>Yii::app()->user->isGuest);

if(Yii::app()->user->checkAccess('2')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('3')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('4')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('5')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
								}
								if($position=='mosm'){
$array[]= array('label'=>'Галерея', 'url'=>array('/gallery'), 'visible'=>Yii::app()->user->isGuest);

					$array[]= array('label'=>'Подать заявку', 'url'=>array('/zayavka'), 'visible'=>Yii::app()->user->isGuest);


										$array[]= array('label'=>'Вход', 'url'=>array('/muzh_na_chas/login'), 'visible'=>Yii::app()->user->isGuest);
			$array[]= array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/muzh_na_chas/logout'), 'visible'=>!Yii::app()->user->isGuest);

			$array[]= array('label'=>'Регистрация', 'url'=>array('/muzh_na_chas/registration'), 'visible'=>Yii::app()->user->isGuest);
				$array[]= array('label'=>'Контакты', 'url'=>array('/muzh_na_chas/contact'), 'visible'=>Yii::app()->user->isGuest);

if(Yii::app()->user->checkAccess('2')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('3')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('4')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
if(Yii::app()->user->checkAccess('5')){
		$array[]= array('label'=>'Админ', 'url'=>array('/admin'));

}
								}
              return $array;
	}
}
