<?php

// 定义应用路径变量(照抄的zend framwork index.php。使用realpath(去掉/../以定义父目录）增加了代码阅读的难度）
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

// Ensure library/ is on include_path
$libstr=realpath(dirname(__FILE__) . '/../library');
$includepath=implode(PATH_SEPARATOR, array(
    $libstr,get_include_path(),
));
set_include_path($includepath);

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/zendapplication.ini'
);

//自加 导入配置文件连接数据库
require_once 'Zend/Config/Ini.php';


$application->bootstrap()
            ->run();
