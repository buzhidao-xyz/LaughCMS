<?php
/**
 * LaughCMS系统升级程序
 * Author: by baoqing wang
 * Date: 2013-09-23
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE);
@set_time_limit(1000);
@set_magic_quotes_runtime(0);

define('IN_LAUGH', TRUE);
define('ROOT_PATH', dirname(__FILE__).'/../');

//载入配置文件
@include ROOT_PATH."./include/Config/config.php";
//载入方法列表
@include "function.php";

//升级版本号
$version = 1.1;

//当前系统版本号
$cfgInfo = T("system")->where(array("cfgname"=>"Version"))->find();
$cversion = floatval($cfgInfo['cfgvalue']);

//如果当前系统版本大于等于版本号 退出更新
if ($cversion >= $version) {
	$msg = "当前系统已经是最新版本! 版本号:".$cversion;
	showmessage($msg);exit;
}

//计算相差版本数
$vnumber = ($version-$cversion)*10;

$db = C("DB.db0");
$db_tb_pre = $db["prefix"];
//循环检查版本差并升级
for ($i=1; $i<=$vnumber; $i++) {
	$uversion = $cversion+($i/10);

	//载入升级sql文件
	$sqlfile = "version".$uversion.".sql";
	$file = ROOT_PATH."./upgrade/".$sqlfile;
	if (file_exists($file)) {
		$sql = file_get_contents($file);
		$sql = str_replace("`pre_", ' `'.$db_tb_pre, $sql);

		//分析sql文件并拆分sql语句
		$ret = array();
		$num = 0;
		foreach(explode(";\n", trim($sql)) as $query) {
			$ret[$num] = '';
			$queries = explode("\n", trim($query));
			foreach($queries as $query) {
				//去掉语句开始是#或者--注释符的语句
				$ret[$num] .= (isset($query[0]) && $query[0] == '#') || (isset($query[1]) && isset($query[1]) && $query[0].$query[1] == '--') ? '' : $query;
			}
			$num++;
		}
		unset($sql);

		//遍历sql数组
		foreach ($ret as $query) {
			$query = trim($query);
			if ($query) {
				//执行sql语句
				T()->exec($query);
			}
		}

		$msg = '<font color="green">系统升级成功! 版本号:'.$uversion.'</font>';
		showmessage($msg);
	} else {
		$msg = '<font color="red">系统升级失败! 版本号:'.$uversion.' *['.$sqlfile.'文件不存在!]</font>';
		showmessage($msg);exit;
	}
}

exit;