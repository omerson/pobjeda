<?php

return new \Phalcon\Config(
	array(
		'database' => array(
			'adapter'  => 'Mysql',
			'host'     => 'localhost',
			'username' => 'root',
			'password' => 'password',
			'dbname'   => 'pobjeda'
		),
		'application' => array(
			'controllersDir' => __DIR__ . '/../../app/controllers/',
			'modelsDir'      => __DIR__ . '/../../app/models/',
			'viewsDir'       => __DIR__ . '/../../app/views/',
			'pluginsDir'     => __DIR__ . '/../../app/plugins/',
			'libraryDir'     => __DIR__ . '/../../app/library/',
			'formsDir'		 => __DIR__ . '/../../app/forms/',			
			'cacheDir'       => __DIR__ . '/../../app/cache/', 
			'baseUri'        => '/pobjeda/',
			'publicUrl'		 => '',
			'cryptSalt'		 => '$9diko$.f#11'
		),
		'mail' => array(
			'fromName' => 'Pobjeda',
			'fromEmail' => 'phosphorum@phalconphp.com',
			'smtp' => array(
				'server' => 'smtp.gmail.com',
				'port' => 587,
				'security' => 'tls',
				'username' => '',
				'password' => '',
			)
		),
		'amazon' => array(
			'AWSAccessKeyId' => "",
			'AWSSecretKey' => ""
		)
	)	
);