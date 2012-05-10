<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log', 'bootstrap'),

        'theme'=>'bootstrap',
    
	// autoloading model and component classes
	'import'=>array(
            'application.models.*',
            'application.modules.admin.models.*',
            'application.components.*',
            'application.modules.user.models.*',
            'application.modules.user.components.*',
//            'ext.*'
            'ext.bootstrap-theme.widgets.*',
            'ext.bootstrap-theme.helpers.*',
            'ext.bootstrap-theme.behaviors.*',
//            'ext.bootstrap.*',
//            'ext.bootstrap.widgets.*',
	),

	'modules'=>array(
            'admin' => array(
                //'layoutPath' => '/layouts'
                'layout'=>'//layouts/admin'
            ),
            'user' => array(
                'tableUsers' => 'users',
                'tableProfiles' => 'profiles',
                'tableProfileFields' => 'profiles_fields'
            ),
		// uncomment the following to enable the Gii tool
		
            'gii'=>array(
                'class'=>'system.gii.GiiModule',
                'password'=>'123',
                // If removed, Gii defaults to localhost only. Edit carefully to taste.
//			'ipFilters'=>array('127.0.0.1','::1'),
                'generatorPaths'=>array(
                    'bootstrap.gii', // since 0.9.1
                ),
            ),
		
	),

	// application components
	'components'=>array(
            'bootstrap'=>array(
                'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
            ),
            'user'=>array(
                // enable cookie-based authentication
                'allowAutoLogin'=>true,
                'loginUrl' => array('/user/login'),
            ),
            // uncomment the following to enable URLs in path-format
		
            'urlManager'=>array(
                'urlFormat'=>'path',
                'showScriptName'=>false,
                'rules'=>array(
                        'admin/categories/admin'=>'admin/categories/admin',
                        '<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
                        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                ),
            ),
		
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ec',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '2069709',
			'charset' => 'utf8',
                        'tablePrefix' => 'ec_'
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
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
		'adminEmail'=>'webmaster@example.com',
	),
);