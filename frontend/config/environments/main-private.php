<?php

/**
 * main.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 5:48 PM
 */
return array(
	'components' => array(
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CProfileLogRoute',
					//'levels'=>'error, warning',
					//'emails'=>'admin@example.com',
				),
				array(
					'class' => 'CWebLogRoute',
					//'levels'=>'trace, info',
					'categories' => 'application',
					'showInFireBug' => true
				),
				array(// configuration for the toolbar
					'class' => 'XWebDebugRouter',
					'config' => 'alignLeft, opaque, runInDebug, fixedPos, collapsed, yamlStyle',
					'levels' => 'error, warning, trace, profile, info',
					'allowedIPs' => array('127.0.0.1'), // , '::1', '192.168.1.54', '192\.168\.1[0-5]\.[0-9]{3}'
				),
			),
		),
	)
);