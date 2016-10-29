<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
define('FIITE',realpath('./'));
define('CORE',FIITE . '/core');
define('APP',FIITE . '/app');
define('UPLOAD',FIITE . '/upload');
define('MODULE', 'app');
define('DEBUG',true);

//Session Start
session_start();

include "vendor/autoload.php";

if(DEBUG) {
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错了';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

include CORE . '/common/function.php';

include CORE . '/fiite.php';

spl_autoload_register('\core\fiite::load');

\core\fiite::run();