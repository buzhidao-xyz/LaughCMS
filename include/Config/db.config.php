<?php
$db_config = array(
	'db0' => array(
		'dbtype'   => 'pdomysql',
		'dbhost'   => 'localhost',
	)
)
// ----------------------------  CONFIG DB  ----------------------------- //
$_config['db']['1']['dbhost'] = 'localhost';
$_config['db']['1']['dbport'] = '3306';
$_config['db']['1']['dbuser'] = 'root';
$_config['db']['1']['dbpw'] = '123456';
$_config['db']['1']['dbcharset'] = 'utf8';
$_config['db']['1']['pconnect'] = '0';
$_config['db']['1']['dbname'] = 'laugh';
$_config['db']['1']['tablepre'] = 'pre_';
$_config['db']['slave'] = '';

// --------------------------  CONFIG ADMINCP  -------------------------- //
// -------- Founders: $_config['admincp']['founder'] = '1,2,3'; --------- //
$_config['admincp']['founder'] = '1';

// -------------------------  CONFIG SECURITY  -------------------------- //
$_config['security']['authkey'] = '5343c9NbSl0GexmP';

// --------------------------  CONFIG COOKIE  --------------------------- //
$_config['cookie']['cookiepre'] = 'dcdo_';

// --------------------------  CONFIG MEMORY  --------------------------- //
$_config['memory']['prefix'] = 'ErPD2Q_';


// -------------------  THE END  -------------------- //

?>