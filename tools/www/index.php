<?php
/*
echo "<pre>";

echo "SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . " - " . basename($_SERVER['SCRIPT_FILENAME']) . "<hr>";
echo "SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . " - " . basename($_SERVER['SCRIPT_NAME']) . "<hr>";
echo "ORIG_SCRIPT_NAME: " . $_SERVER['ORIG_SCRIPT_NAME'] . " - " . basename($_SERVER['ORIG_SCRIPT_NAME']) . "<hr>";
echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . " - " . basename($_SERVER['PHP_SELF']) . "<hr>";
echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . " - " . basename($_SERVER['DOCUMENT_ROOT']) . "<hr>";
print_r($_SERVER);
die();
//*/

/**
 * index.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 11:13 AM
 */
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

// On dev display all errors
if(YII_DEBUG) {
	error_reporting(-1);
	ini_set('display_errors', true);
}

date_default_timezone_set('UTC');

chdir(dirname(__FILE__).'/../..');

$root=dirname(__FILE__).'/..';
$common=$root.'/../common';

require_once($common.'/lib/Yii/yii.php');
$config=require('tools/config/main.php');
require_once($common.'/components/WebApplication.php');
require_once('common/lib/global.php');


$app = Yii::createApplication('WebApplication', $config);

/* please, uncomment the following if you are using ZF library */
/*
Yii::import('common.extensions.EZendAutoloader', true);

EZendAutoloader::$prefixes = array('Zend');
EZendAutoloader::$basePath = Yii::getPathOfAlias('common.lib') . DIRECTORY_SEPARATOR;

Yii::registerAutoloader(array("EZendAutoloader", "loadClass"), true);
*/

$app->run();

/* uncomment if you wish to debug your resulting config */
if (YII_DEBUG) echo '<pre>' . dump($config) . '</pre>';