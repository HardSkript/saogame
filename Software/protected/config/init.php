<?php
return array(
	'basePath'									=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'										=>'Sword Art Online',
	'language'									=>'pt_BR',
	'sourceLanguage'							=>'en_US',
	'preload'									=>array('log'),
	'import'									=>array(
		'application.models.*',
		'application.components.*',
	),
	'modules'									=>array(
		'gii'									=>array(
			'class'								=>'system.gii.GiiModule',
			'password'							=>'admin',
		),
	),
	'defaultController'							=>'app',
	'components'								=>array(
		'user'									=>array(
			'allowAutoLogin'					=>true,
			'loginUrl'							=>array('app/login')
		),
		'db'									=>array(
			'connectionString' 					=> 'mysql:host=localhost;dbname=saogame',
			'emulatePrepare' 					=> true,
			'username' 							=> 'root',
			'password' 							=> '',
			'charset' 							=> 'utf8',
		),
		'errorHandler'							=>array(
			// use 'site/error' action to display errors
			'errorAction'						=>'app/error',
		),
		'urlManager'							=>array(
			'urlFormat'							=>'path',
			'rules'								=>array(
				'post/<id:\d+>/<title:.*?>'		=>'post/view',
				'posts/<tag:.*?>'				=>'post/index',
				'<controller:\w+>/<action:\w+>'	=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'								=>'CLogRouter',
			'routes'							=>array(
				array(
					'class'						=>'CFileLogRoute',
					'levels'					=>'error, warning',
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
	'params'									=>array(),
);