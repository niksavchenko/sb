<?php
/**
 * main.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 5:48 PM
 *
 * This file will be merged on main-env.php configuration file. It should contain application configuration settings,
 * related to your development machine. You can also use main-local.php
 */
return array(
    'components'=>array(
//				'request' => array(
//            'baseUrl' => 'http://yiibackboneboilerplate.alatki.dom/tools/',
//        ),			
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CWebLogRoute',
                    //'levels'=>'trace, info',
                    //'categories'=>'system.*',
                ),
                array(
                    'class'=>'CProfileLogRoute',
                    //'levels'=>'error, warning',
                    //'emails'=>'admin@example.com',
                ),
            ),
        ),
    )	
);