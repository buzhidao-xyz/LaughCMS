<?php
/**
 * 后台配置文件
 */

//加载系统配置缓存文件
require("cache.config.php");

//定义管理中心配置文件目录
define('ADMIN_CONFIG_DIR',str_replace('\\', '/', dirname(__FILE__)));

//加载前台配置文件
$config_dir = str_replace('/'.$cache['admin_path'].'/include/Config', '', ADMIN_CONFIG_DIR).'/include/Config';
require_once($config_dir.'/config.php');

$admin_config = array(
    'STYLE_DEFAULT'        => ADMIN_DIR.'/themes/blue', //模板样式路径

    'INCLUDE_DIR'          => ADMIN_DIR.'/include',
    'CACHE_DIR'            => ADMIN_DIR.'/cache',
    'LOG_DIR'              => ROOT_DIR.'/data/log',
    'VENDOR'			   => ROOT_DIR.'/include/Vendor',

    'COMPILE_LIFE_TIME'    => 10,

    'TEMPLATE_TYPE'    => 'Smarty',   //模版引擎类型 Laugh/Smarty
    //模版选项 Smarty模版起作用
    'TEMPLATE_OPTIONS' => array(
        'debug'            => false,
        'caching'          => false,
        'cache_lifetime'   => 120,
        'template'         => ADMIN_DIR.'/themes/blue', //模板样式路径
        'template_compile' => ADMIN_DIR.'/cache/compile',
        'template_cache'   => ADMIN_DIR.'/cache/cache',
        'plugin_dir'       => ROOT_DIR.'/include/Vendor/Smarty/plugins',
    ),
);
dump(1);exit;
$config = array_merge($config,$admin_config);
