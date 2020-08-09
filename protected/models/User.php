<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $created
 * @property integer $ban
 * @property integer $role
 * @property integer $request_id
 * @property string $phone
 * @property string $passport
 * @property string $photo
 * @property string $bankcard
 * @property string $email
 * @property string $debt
 * @property string $money
 * @property string $manager
 * @property string $city
 */
class User extends CActiveRecord
{
    const ROLE_HOST = 'host';
	const ROLE_TOPADMIN = 'gadmin';
	const ROLE_ADMIN = 'admin';
	const ROLE_MODER = 'moderator';
	const ROLE_USER = 'user';
	const ROLE_BANNED = 'banned';
	public $verifyCode;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, phone', 'required'),
			array('created, ban, role, request_id', 'numerical', 'integerOnly'=>true),
			array('username, password, bankcard, debt, money, manager, city', 'length', 'max'=>50),
			array('phone, passport', 'length', 'max'=>20),
			array('email', 'length', 'max'=>255),
			array('photo', 'safe'),
array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(),'on'=>'registration'),
			
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(),'on'=>'registration'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, created, ban, role, request_id, phone, passport, photo, bankcard, email, debt, money, manager, city', 'safe', 'on'=>'search'),
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
		'Request'=>array(self::BELONGS_TO,'Request','request_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Пользователь',
			'password' => 'Пароль',
			'created' => 'Дата рег',
			'ban' => 'Бан',
			'role' => 'Роль',
			'request_id' => 'Запрос',
			'phone' => 'Телефон',
			'passport' => 'Серия паспорта',
			'photo' => 'Фото',
			'bankcard' => 'Банковская карта',
			'email' => 'Email',
			'debt' => 'Долг',
			'money' => 'Баланс',
			'manager' => 'Менеджер',
			'verifyCode'=>'Код с картинки',
            'city' => 'Город',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('created',$this->created);
		$criteria->compare('ban',$this->ban);
		$criteria->compare('role',$this->role);
		$criteria->compare('request_id',$this->request_id);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('passport',$this->passport,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('bankcard',$this->bankcard,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('debt',$this->debt,true);
		$criteria->compare('money',$this->money,true);
		$criteria->compare('manager',$this->manager,true);
        $criteria->compare('city',$this->city,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	       public function beforeSave()
	{
                if($this->isNewRecord){
                    $this->created=  time();
                     $this->role =1;
					 $this->debt =10;
					 
                }
                   
                  $this->password = md5('sr0]{.yfg'.$this->password);
              return parent::beforeSave();
	}
         public static function all()
	{
		
              return CHtml::listData(self::model()->findAll(), 'id','username');
	}
	    public static function procent()
	{
		
              return CHtml::listData(self::model()->findAll(), 'id','debt');
	}
	
	//$sum = Request::paid();
	//$procent =$this->debt;
	

	 
	
}
