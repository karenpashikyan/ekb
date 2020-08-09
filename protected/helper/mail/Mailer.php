<?php

/**
 * Class Mailer
 */
class Mailer
{
    /** @var Request */
    private $request;
    /** @var  */
    private $serialNumber;
    /** @var  */
    private $name;
    /** @var string  */
    private $subject = 'master-na-chas (ekb)';
    /** @var  */
    private $headers;
    /** @var  */
    private $message;

    /**
     * Mailer constructor.
     * @param Request $request
     * @throws CException
     */
    public function __construct(Request $request)
    {
        $this->setRequest($request)->setSerialNumber()->setName()->setHeaders()->setMessage();
        return $this;
    }

    /**
     * @return $this
     */
    public function mail()
    {
        mail(Yii::app()->params['adminEmail'], $this->subject, $this->message, $this->headers);
        return $this;
    }

    /**
     * @param Request $request
     * @return $this
     */
    private function setRequest(Request $request)
    {
        $request->time_finish = time();
        $this->request = $request;
        return $this;
    }

    /**
     * @return $this
     * @throws CException
     */
    private function setSerialNumber()
    {
        //to get ID a current request's order for a request name
        $command = Yii::app()->db->createCommand();
        $lastRequestId = $command->select('id')->from('cms_request')->order('id desc')->limit(1)->queryRow();

        $this->serialNumber = $lastRequestId["id"] + 1;

        return $this;
    }

    /**
     * @return $this
     */
    private function setName()
    {
        $this->name = 'Zayavka - ' . $this->serialNumber;
        return $this;
    }

    /**
     * @return $this
     */
    private function setHeaders()
    {
        $this->headers = "From: $this->name <{$this->request->attributes["short_discription"]}>\r\n" .
            "Reply-To: " . Yii::app()->params['adminEmail'] . "\r\n" .
            "MIME-Version: 1.0\r\n" .
            "Content-Type: text/html; charset=utf-8";
        return $this;
    }

    /**
     * @return $this
     */
    private function setMessage()
    {
        $this->message = "
            Заявка № " . $this->serialNumber . "<br>
            Промокод: " . $this->request->attributes["user_id"] . "<br>
            Имя: " . $this->request->title . "<br>
            Телефон: " . $this->request->time_start . "<br>
            Адрес: " . $this->request->attributes["address"] . "<br>
            E-mail: " . $this->request->attributes["short_description"] . "<br>
            Комментарий: " . $this->request->description . "<br>
            Время отправки: " . $this->getLocalTime(2, $this->request->attributes["time_finish"]) . "<br>
            ";
        return $this;
    }

    /**
     * @param $hours
     * @param $time
     * @return false|string
     * Time counts by the Moscow's Time Zone
     * 2 - means Yekaterinburg's time zone
     */
    private function getLocalTime($hours,$time)
    {
        $time = $time + $hours*60*60;
        return date("m-d-Y H:i:s", $time);
    }
}