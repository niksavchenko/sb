<?php
/**
 * main.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 5:48 PM
 */
return array(
    'components'=>array(
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