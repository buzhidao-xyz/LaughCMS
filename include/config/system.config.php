<?php
//根目录
define('ROOT_DIR', str_replace('/include/config', '', str_replace('\\', '/', dirname(__FILE__))));

//网站主文件夹目录
define('', 'admin');

//admin目录
define('ADMIN_DIR', ROOT_DIR.'/admin');

//主域名HOST
define('__HOST__', 'http://'.$_SERVER['HTTP_HOST']);

//URL常量
define('__SELF__', substr(str_replace('/index.php', '', $_SERVER['PHP_SELF']),1));

//工程目录
define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']));

//工程名
define('APP_NAME', substr(APP_PATH, strripos(APP_PATH, '/')+1));

//当前项目主目录相对网站服务器路径地址
define('__APPM__',substr(ROOT_DIR, strripos(ROOT_DIR, '/')));

//当前项目相对网站服务器路径地址
define('__APP__', __APPM__.str_replace(ROOT_DIR, "", APP_PATH));

//时区
date_default_timezone_set('Asia/Shanghai');

//时间戳
define('TIMESTAMP', time());

//表前缀 与数据库处理类中的变量保持一致
define('TBF', '#@__');

