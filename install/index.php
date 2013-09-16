<?php
/**
 * LaughCMS安装向导
 * 2013-09-16 baoqing wang
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE);
@set_time_limit(1000);
@set_magic_quotes_runtime(0);

define('IN_LAUGH', TRUE);
define('ROOT_PATH', dirname(__FILE__).'/../');

//加载安装文件
require ROOT_PATH.'./install/include/install_var.php';
require ROOT_PATH.'./install/include/install_mysql.php';
require ROOT_PATH.'./install/include/install_function.php';
require ROOT_PATH.'./install/include/install_lang.php';

