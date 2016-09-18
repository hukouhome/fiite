<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
define('FIITE',realpath('/fiite'));
define('CORE',FIITE . '/core');
define('APP',FIITE . '/app');

define('DEBUG',true);

if(DEBUG) {
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

include CORE . '/common/function.php';

include CORE . '/fiite.php';

spl_autoload_register('\core\fiite::load');

\core\fiite::run();