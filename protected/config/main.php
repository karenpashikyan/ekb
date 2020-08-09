<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Мастер на час |',
	'language' => 'ru',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.helper.mail.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		 'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// application components
	'components'=>array(
	'authManager' => array(
    // Будем использовать свой менеджер авторизации
    'class' => 'PhpAuthManager',
    // Роль по умолчанию. Все, кто не админы, модераторы и юзеры — гости.
    'defaultRoles' => array('guest'),
),
		'user'=>array(
		'class' => 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'/' => 'muzh_na_chas',
				'login' => 'muzh_na_chas/login',
				'contact' => 'muzh_na_chas/contact',
				'registration' => 'muzh_na_chas/registration',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
			'showScriptName'=>false,
		),

		 'db'=>array(
		 	'connectionString' => 'mysql:host=localhost;dbname=t',
		 	'emulatePrepare' => true,
		 	'username' => 'root',
		 	'password' => '',
		 	'charset' => 'utf8',
		 	'tablePrefix'=>'cms_',
		 ),

		

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'muzh_na_chas/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'parvizkaren123456@gmail.com',
	),
);
