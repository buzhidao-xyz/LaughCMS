<?php
/**
 * Laugh CMS 安装初始化变量
 * by baoqing wang
 * 2013-09-21
 */

if(!defined('IN_LAUGH')) exit('Access Denied');

define('SOFT_NAME', 'Laugh!');
define('SOFT_VERSION', 'V1');
define('SOFT_RELEASE', '20130921');

define('OFFICIAL_SITE', 'http://www.laughcms.net/');

define('INSTALL_LANG', 'SC_UTF8');

//数据库配置文件
define('DBCONFIG', './include/Config/db.config.php');

$sqlfile = ROOT_PATH.'./install/data/install_laugh.sql';
$lockfile = ROOT_PATH.'./data/install.lock';

define('CHARSET', 'utf-8');
define('DBCHARSET', 'utf8');

//表前缀
define('ORIG_TABLEPRE', 'pre_');

//系统函数检查
$func_items = array('mysql_connect', 'gethostbyname', 'file_get_contents', 'xml_parser_create');

$filesock_items = array('fsockopen', 'pfsockopen', 'stream_socket_client', 'curl_init');

//环境变量检查
$env_items = array
(
	'os' => array('c' => 'PHP_OS', 'r' => 'notset', 'b' => 'unix'),
	'php' => array('c' => 'PHP_VERSION', 'r' => '5.1', 'b' => '5.3'),
	'attachmentupload' => array('r' => 'notset', 'b' => '2M'),
	'gdversion' => array('r' => '1.0', 'b' => '2.0'),
	'diskspace' => array('r' => '10M', 'b' => 'notset'),
);

//目录权限检查
$dirfile_items = array
(
	'article_dir'  => array('type' => 'dir', 'path' => './a'),
	'cache'        => array('type' => 'dir', 'path' => './cache'),
	'compile'      => array('type' => 'dir', 'path' => './cache/compile'),
	'data'         => array('type' => 'dir', 'path' => './data'),
	'dbbackup'     => array('type' => 'dir', 'path' => './data/database'),
	'log'          => array('type' => 'dir', 'path' => './data/log'),
	'upload_dir'   => array('type' => 'dir', 'path' => './Uploads'),
	'advertise_dir'=> array('type' => 'dir', 'path' => './Uploads/AdImage'),
	'attach_dir'   => array('type' => 'dir', 'path' => './Uploads/Attachment'),
	'image_dir'    => array('type' => 'dir', 'path' => './Uploads/Image'),
	'simage_dir'   => array('type' => 'dir', 'path' => './Uploads/ScrollImage'),
	'config_dir'   => array('type' => 'dir', 'path' => './include/Config'),
	'config_file'  => array('type' => 'file', 'path' => './include/Config/config.php'),
	'config_cache' => array('type' => 'file', 'path' => './include/Config/cache.config.php'),
	'admin_cache'  => array('type' => 'dir', 'path' => './admin/cache'),
	'admin_compile'=> array('type' => 'dir', 'path' => './admin/cache/compile'),
	'admin_data'   => array('type' => 'dir', 'path' => './admin/data'),
	'admin_log'    => array('type' => 'dir', 'path' => './admin/data/log')

);

$form_app_reg_items = array
(
	'ucenter' => array
	(
		'ucurl' => array('type' => 'text', 'required' => 1, 'reg' => '/^https?:\/\//', 'value' => array('type' => 'var', 'var' => 'ucapi')),
		'ucip' => array('type' => 'text', 'required' => 0, 'reg' => '/^\d+\.\d+\.\d+\.\d+$/'),
		'ucpw' => array('type' => 'password', 'required' => 1, 'reg' => '/^.*$/')
	),
	'siteinfo' => array
	(
		'sitename' => array('type' => 'text', 'required' => 1, 'reg' => '/^.*$/', 'value' => array('type' => 'constant', 'var' => 'SOFT_NAME')),
		'siteurl' => array('type' => 'text', 'required' => 1, 'reg' => '/^https?:\/\//', 'value' => array('type' => 'var', 'var' => 'default_appurl'))
	)
);

$form_db_init_items = array(
	'dbinfo' => array(
		'dbhost' => array('type' => 'text', 'required' => 1, 'reg' => '/^.+$/', 'value' => array('type' => 'var', 'var' => 'dbhost')),
		'dbport' => array('type' => 'text', 'required' => 1, 'reg' => '/^.+$/', 'value' => array('type' => 'var', 'var' => 'dbport')),
		'dbname' => array('type' => 'text', 'required' => 1, 'reg' => '/^.+$/', 'value' => array('type' => 'var', 'var' => 'dbname')),
		'dbuser' => array('type' => 'text', 'required' => 0, 'reg' => '/^.*$/', 'value' => array('type' => 'var', 'var' => 'dbuser')),
		'dbpw'   => array('type' => 'text', 'required' => 0, 'reg' => '/^.*$/', 'value' => array('type' => 'var', 'var' => 'dbpw')),
		'tablepre'   => array('type' => 'text', 'required' => 0, 'reg' => '/^.*+/', 'value' => array('type' => 'var', 'var' => 'tablepre')),
		'adminemail' => array('type' => 'text', 'required' => 1, 'reg' => '/@/', 'value' => array('type' => 'var', 'var' => 'adminemail')),
	),
	'admininfo' => array(
		'username'  => array('type' => 'text', 'required' => 1, 'reg' => '/^.*$/', 'value' => array('type' => 'constant', 'var' => 'admin')),
		'password'  => array('type' => 'password', 'required' => 1, 'reg' => '/^.*$/'),
		'password2' => array('type' => 'password', 'required' => 1, 'reg' => '/^.*$/'),
		'email'     => array('type' => 'text', 'required' => 1, 'reg' => '/@/', 'value' => array('type' => 'var', 'var' => 'adminemail')),
	)
);

$serialize_sql_setting = array(
	'article_tags' => array(
		1 => '原创',
		2 => '热点',
		3 => '组图',
		4 => '爆料',
		5 => '头条',
		6 => '幻灯',
		7 => '滚动',
		8 => '推荐'
	)
);
