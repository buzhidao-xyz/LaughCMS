<?php
//开启session
session_start();

error_reporting(E_ALL | E_STRICT);

//常量配置文件
require('system.config.php');

//数据库配置文件
require('c.config.php');

//orm数据映射文件
require('orm.config.php');

//载入错误码映射文件
require('ecode.config.php');

//读取c.config.php文件内容
function C($key)
{
    global $config;
    $key = explode(".", $key);
    return isset($key[1]) ? $config[$key[0]][$key[1]] : $config[$key[0]];
}

//自动加载工具类，无需调用
function __autoload($class)
{
    $include_dir = C('INCLUDE_DIR');
    $classpath = $include_dir.'/model/'.strtolower($class).".model.php";

	if (file_exists($classpath)) {
	   include_once($classpath);
	} else {
        $type = strstr($class, 'Control') ? 'Control' : 0;
        $type = !$type && strstr($class, 'Helper') ? 'Helper' : 0;
        switch ($type) {
            case 'Control':
                $classname = str_replace('Control', '', $class);
                $classpath = $include_dir.'/control/'.strtolower($classname).".control.php";
                break;
            case 'Helper':
                $classname = str_replace('Helper', '', $class);
                $classpath = $include_dir.'/helper/'.strtolower($classname).".helper.php";
                break;
            default:
                return true;
        }
        
        if (file_exists($classpath)) include_once($classpath);
        else {
            $include_path = ROOT_DIR.'/include';
            $classpath = $include_path.'/model/'.strtolower($class).".model.php";

            if (file_exists($classpath)) {
               include_once($classpath);
            } else {
                $type = strstr($class, 'Helper') ? 'Helper' : 0;
                $type = !$type && strstr($class, 'Smarty') ? 'Smarty' : $type;
                switch ($type) {
                    case 'Helper':
                        $classname = str_replace('Helper', '', $class);
                        $classpath = $include_path.'/helper/'.strtolower($classname).".helper.php";
                        break;
                    case 'Smarty':
                        $classpath = $include_path.'/vendor/Smarty/sysplugins/'.strtolower($classname).".php";
                        break;
                    default:
                        return true;
                }
                
                if (file_exists($classpath)) include($classpath);
            }
        }
	}
}

//引入全局方法
require(C('INCLUDE_DIR').'/function.php');
require(C('INCLUDE_DIR').'/common.php');

function Error_Handler($errno,$errstr,$errorfile,$errline,$errcontext)
{
	if ($errno) {
		$error = getIp().' 系统发生错误: '.$errstr.', in '.$errorfile.' on line '.$errline;

        dump("<font color=red>".$error."</font>");
		lalog($error);
	}
}

//设置自定义的错误记录程序
set_error_handler('Error_Handler');

//初始化数据库+ADUS类
$dbadus = new DBADUS();

//初始化memcache缓存类
new Memcacheg();
