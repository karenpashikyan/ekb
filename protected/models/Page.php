<?php

/**
 * This is the model class for table "{{page}}".
 *
 * The followings are the available columns in table '{{page}}':
 * @property integer $id
 * @property integer $category_id
 * @property string $discription
 * @property string $title
 * @property string $content
 * @property string $long_discription
 * @property integer $created
 * @property integer $status
 * @property string $short_discriptio
 */
class Page extends CActiveRecord
{

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{page}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('category_id, created, status', 'numerical', 'integerOnly'=>true),
			array('discription, title,  url, keywords', 'length', 'max'=>250),
			array('short_discriptio', 'length', 'max'=>250),
			array('content, long_discription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_id, url, keywords, discription, title, content, long_discription, created, status, short_discriptio', 'safe', 'on'=>'search'),
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
			'category_id' => 'Категории',
			'discription' => 'discription',
			'title' => 'H1,title,Заголовок',
			'content' => 'Контент',
			'long_discription' => 'Картинка услуги',
			'created' => 'дата и время',
			'status' => 'Статус',
			'short_discriptio' => 'описание',
			'keywords' => 'Ключевые слова',
			'url' => 'Адрес url',
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
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('discription',$this->discription,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('long_discription',$this->long_discription,true);
		$criteria->compare('created',$this->created);
		$criteria->compare('status',$this->status);
		$criteria->compare('short_discriptio',$this->short_discriptio,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('url',$this->url,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	// foreach ($model as $key) {
	//  echo $model=>$long_discription,'<br>';
 // }
public function beforeSave() {
            if ($this->isNewRecord)
                $this->created=time();
            return parent::beforeSave();
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Page the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
