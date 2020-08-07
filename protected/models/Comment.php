<?php

/**
 * This is the model class for table "{{comment}}".
 *
 * The followings are the available columns in table '{{comment}}':
 * @property integer $id
 * @property string $content
 * @property integer $page_id
 * @property integer $created
 * @property integer $user_id
 * @property string $guest
 */
class Comment extends CActiveRecord
{
    
	public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{comment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    array('content', 'required'),
                    array('content, guest', 'required', 'on'=>'Guest'
                        ),
                     
                    array('page_id, created, user_id', 'numerical', 'integerOnly'=>true),
			array('guest', 'length', 'max'=>15),
			array('content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
                    
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(),
                        'on'=>'Guest'
                        ),
			array('id, content, status, page_id, created, user_id, guest', 'safe', 'on'=>'search'),
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
                    'user'=> array(self::BELONGS_TO,'User','user_id'),
                    'page'=> array(self::BELONGS_TO,'Page','page_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'content' => 'Текст',
			'page_id' => 'Страница',
			'created' => 'Дата',
			'user_id' => 'Пользователь',
			'guest' => 'Имя(гость)',
                    'status' => 'Статус',
		);
	}

	
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('created',$this->created);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('guest',$this->guest,true);
                $criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
           public function beforeSave()
	{
		if($this->isNewRecord)
                   $this->created = time();
                
                if(!Yii::app()->user->isGuest)
                    $this->user_id = Yii::app ()->user->id;
                
              return parent::beforeSave();
	}
            public static function all($page_id)
	{
		$criteria=new CDbCriteria;

		$criteria->compare('page_id',$page_id);
		$criteria->compare('status',1);
                
                $criteria->order= 'created DESC';
                
                return new CActiveDataProvider('Comment', array(
			'criteria'=>$criteria,
		));
	}
}
