<?php

/**
 * This is the model class for table "{{request}}".
 *
 * The followings are the available columns in table '{{request}}':
 * @property integer $id
 * @property string $title
 * @property integer $status
 * @property string $user_id
 * @property string $client_name
 * @property string $master_name
 * @property string $description
 * @property string $sum
 * @property string $short_description
 * @property integer $order_date
 * @property string $address
 * @property integer $time_start
 * @property integer $phone
 * @property integer $time_finish
 * @property string $author
 * @property integer $paid
 */
class Request extends CActiveRecord
{
    public $verifyCode;
    public $title;
    public $description;
    public $subject;
    public $time_start;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{request}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, time_start', 'required'),
            array('status,order_date, time_start, phone, time_finish, paid', 'numerical', 'integerOnly' => true),
            array('title, client_name, description, short_description, address', 'length', 'max' => 500),
            array('user_id,  description, address,  client_name, master_name, sum, author', 'length', 'max' => 250),
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements(), 'on' => 'registration'),

// The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, status, user_id, client_name, master_name, description, sum, short_description, order_date, address, time_start, phone, time_finish, author, paid', 'safe', 'on' => 'search'),
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
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),

        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Имя',
            'status' => 'Статус',
            'user_id' => 'Промокод',
            'client_name' => 'Клиент',
            'master_name' => 'Мастер',
            'description' => 'Комментарий',
            'sum' => 'Стоимость',
            'short_description' => 'E-mail',
            'order_date' => 'процент',
            'address' => 'Адрес',
            'time_start' => 'Телефон',
            'phone' => 'Телефон',
            'time_finish' => 'Дата',
            'author' => 'Менеджер',
            'paid' => 'Оплачено',
            'verifyCode' => 'Код с картинки',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('user_id', $this->user_id, true);
        $criteria->compare('client_name', $this->client_name, true);
        $criteria->compare('master_name', $this->master_name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('sum', $this->sum, true);
        $criteria->compare('short_description', $this->short_description, true);
        $criteria->compare('order_date', $this->order_date);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('time_start', $this->time_start);
        $criteria->compare('phone', $this->phone);
        $criteria->compare('time_finish', $this->time_finish);
        $criteria->compare('author', $this->author, true);
        $criteria->compare('paid', $this->paid);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Request the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function all()
    {

        return CHtml::listData(self::model()->findAll(), 'id', 'title');
    }

    //$finish = $this->paid;
    public static function paid($sum)
    {
        $models = User::model()->findAllByAttributes(array('debt' => $procent));
        //$sum = CHtml::listData(self::model()->findAll(), 'id','sum');
        //$procent = CHtml::listData(self::model()->findAll(), 'id','paid');
        return $w = ($procent / $sum) * 100;

    }

    public static function procent($procent, $sum)
    {
        $w = ($procent / $sum) * 100;
        return $w;
    }

    public function beforeSave()
    {
        if ($this->isNewRecord) {
            $this->time_finish = time();
            //to get ID a current request's order for a request name
            $command = Yii::app()->db->createCommand();
            $lastRequestId = $command->select('id')->from('cms_request')->order('id desc')->limit(1)->queryRow();
            $currentRequestOrder = $lastRequestId["id"] + 1;

            $name = 'Zayavka - ' . $currentRequestOrder;
            $subject = 'master-na-chas (ekb)';
            $headers = "From: $name <{$this->attributes["short_discription"]}>\r\n" .
                "Reply-To: " . Yii::app()->params['adminEmail'] . "\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/plain; charset=UTF-8";

            $message = "
            Заявка № " . $currentRequestOrder . " <br>
            Промокод: " . $this->attributes["user_id"] . " <br>
            Имя: " . $this->title . " <br>
            Телефон: " . $this->time_start . " <br>
            Адрес: " . $this->attributes["address"] . " <br>
            E-mail: " . $this->attributes["short_description"] . " <br>
            Комментарий: " . $this->description . " <br>
            Время отправки: " . $this->getLocalTime(2,$this->attributes["time_finish"]) . " <br>
            ";

            mail(Yii::app()->params['adminEmail'], $subject, $message, $headers);
            //mail(Yii::app()->params['adminEmail'],$subject, $model->time_start, $headers);
            $this->refresh();
            return parent::beforeSave();
        }
    }

    /**
     * @param $hours
     * @param $time
     * @return false|string
     * Time counts by the Moscow's Time Zone
     */
    private function getLocalTime($hours,$time)
    {
        $time = $time + $hours*60*60;
        return date("m-d-Y H:i:s", $time);
    }
}
