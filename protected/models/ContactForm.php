<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
public function attributeLabels()
	{
		return array(
			'subject'=>'Тема',
			'name'=>'Имя',
				'body'=>'текст',
			'verifyCode'=>'код проверки',
			'Submit' => 'отправить',
		);
	}
	public function rules()
	{
		return array(
			 // array('subject'),
			// name, email, subject and body are required
			array('name, email, body', 'required'),
			array('subject', 'length', 'max'=>250),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */

}
