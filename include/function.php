<?php
/**
 * assign方法 注册全局变量 模板解析用
 * @param $key 全局数组 键值
 * @param $value 全局数组 数据值
 * @return null
 */
function assign($key, $value)
{
	global $data;

	$data[$key] = $value;
}

/**
 * 获取N位随机字符串
 * 字符串取值0-9 a-z之间
 * @param $n 要获取的随机字符串长度(1-100) 默认值6
 */
function getRandStrs($n=6,$type=2)
{
    $return = '';
	$totalStr = array(
        0 => '123456789',
        1 => 'abcdefghijklmnopqrstuvwxyz',
        2 => '123456789abcdefghijklmnopqrstuvwxyz',
    );
    
    $n = preg_match('/^[1-9][0-9]{0,1}$/', $n) ? $n : 0;
    $l = strlen($totalStr[$type])-1;
    for ($i= 0; $i< $n; $i++) {
        $return .= $totalStr[$type]{rand(0,$l)};
    }

	return $return;
}

/**
 * 分析函数返回值 ecode
 * @param $ecode model处理返回值号
 * @return true/false true:model返回错误并返回错误notice false:model正确处理
 */
function eCode($ecode)
{
    global $ecodes;

    if (is_array($ecode)) return false;

    $exp = "/^1[0-9]{3}$/";
    return preg_match($exp, $ecode)?$ecodes[$ecode]:'';
}

/**
 * 读取文件内容
 * @param 要读取的文件
 * @param 文件内容
 */
function getFile($f)
{
    return file_exists($f) ? file_get_contents($f) : false;
}

/**
 * 截取字符串 用指定编码来解决中文断字问题
 * @param $string 要截取的字符串
 * @param $start 开始截取的位置
 * @param $length 要截取的长度
 * @param $encoding 入口编码 默认值 UTF-8
 * @param $outcoding string 出口编码 默认值 GBK
 * @param $type int 截取方式 0单一字符截取 1双字符截取 
 */
function msbstr($string, $start, $length, $encoding='UTF-8', $outcoding='GBK', $type=0)
{
    $return = null;

    switch ($type) {
        case 0:
            $return = mb_substr($string, $start, $length, $encoding);
        break;
        case 1:
            $return = iconv($outcoding, $encoding, substr(iconv($encoding, $outcoding, $string), $start, $length));
        break;
        default:
        break;
    }

    return $return;
}

/**
 * 打印调试函数 浏览器友好的变量输出
 * @param $data 要输出的变量
 */
function dump($var, $flag=0, $echo=true, $label=null, $strict=true) {
    if ($flag) {
        echo "<pre>";print_r($var);return null;
    }

    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace("/\]\=\>\n(\s+)/m", '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    } else {
        return $output;
    }
}

/**
 * 获得浏览当前页面的用户的 IP 地址
 * @return ip
 */
function getIp() {
    static $ip = NULL;
    if ($ip !== NULL) return $ip;
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos =  array_search('unknown',$arr);
        if(false !== $pos) unset($arr[$pos]);
        $ip   =  trim($arr[0]);
    } else if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $ip = (false !== ip2long($ip)) ? $ip : '0.0.0.0';
    return $ip;
}

//格式化ip为无符号整型数
function ip2longs($ip)
{
    if (!$ip) return null;
    return sprintf("%u",ip2long($ip));
}

//整型数格式化ip
function longs2ip($long)
{
    if (!$long) return null;
    return long2ip($long);
}

/**
 * 系统错误日志记录
 * @param $str 错误信息
 */
function lalog($str) {
	$log = "data/log/access.log";
	if (file_exists($log)) {
		if (filesize($log) >= 500 * 1024) {
			$log1 = str_replace(".log", "_".date("YmdHis", TIMESTAMP).".log", $log);

			@copy($log, $log1);
			file_put_contents($log, "");
		}
	}
    
	$ip = getIp();
    $access_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $referer_url = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:$access_url;
	$logstr = mkdate()." | ".$str." <br>访问:<font color=blue>".$access_url."</font> <br>来源:<font color=green>".$referer_url."</font>(";

	file_put_contents($log, "^".substr(php_uname(), 0, 20)." | ".$logstr."<a href='http://www.ip138.com/ips.asp?ip=".$ip."&action=2' target=_blank>".$ip."</a>)\$\n", FILE_APPEND);
}

/**
 * 计算程序执行时间
 * @param $begin_time 开始时间 microtime
 * @param $end_time 结束时间 microtime
 * @return $runtime 精确到第八位小数
 */
function runtime($begin_time, $end_time)
{
	$begin_time = explode(" ",$begin_time);
	$end_time = explode(" ",$end_time);

	$runtime = $end_time[1] - $begin_time[1] + $end_time[0] - $begin_time[0];

	return number_format($runtime, 8, ".", "");
}

/**
 * session方法 存取
 * @param $sessionname string session名
 * @param $sessionvalue mixed session值 默认为'' 值为null则删除该session
 */
function session($sessionname,$sessionvalue='')
{
	$return = true;

    if ($sessionvalue === null) {
        unset($_SESSION[$sessionname]);
    } else if (!$sessionvalue) {
		$return = isset($_SESSION[$sessionname]) ? $_SESSION[$sessionname] : '';
	} else {
		$_SESSION[$sessionname] = $sessionvalue;
	}

	return $return;
}

/**
 * 压缩输出方法 gzip压缩函数
 * @param $content mixed 要压缩的页面内容
 */
function ob_gzip($content=null)
{
    if(!headers_sent() && // 如果页面头部信息还没有输出
    extension_loaded("zlib") && // 而且zlib扩展已经加载到PHP中
    strstr($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")){ //而且浏览器说它可以接受GZIP的页面
        //为准备压缩的内容贴上"此页已压缩"的注释标签，然后用zlib提供的gzencode()函数执行级别为9的压缩，这个参数值范围是0-9,0表示无压缩，9表示最大压缩，当然压缩程度越高越费CPU.
        $content = gzencode($content." 此页已压缩", 9);

        //然后用header()函数给浏览器发送一些头部信息，告诉浏览器这个页面已经用GZIP压缩过了！
        header("Content-Encoding: gzip");
        header("Vary: Accept-Encoding");
        header("Content-Length: ".strlen($content));
    }

    return $content; //返回压缩的内容
}

//-----------------------数据库操作方法-----------------------//

/**
 * 初始化ADUS操作
 */
function T($table)
{
    global $dbadus;
    
    DBADUS::$_table = $table ? $table : '';
    
    return $dbadus;
}

//-----------------------单字符名方法-----------------------//

/**
 * 获取变量GET
 * @param $param 变量名
 */
function g($param)
{
    $return = isset($_GET[$param]) ? $_GET[$param] : '';
    $types = array('string','integer','double');
    if (in_array(gettype($return), $types)) {
        $return = FilterHelper::F_htmlentities(trim($return));
    }

    return $return;
}

/**
 * 获取变量POST
 * @param $param 变量名
 */
function p($param)
{
    $return = isset($_POST[$param]) ? $_POST[$param] : '';
    $types = array('string','integer','double');
    if (in_array(gettype($return), $types)) {
        $return = FilterHelper::F_htmlentities(trim($return));
    }

    return $return;
}

/**
 * 获取变量(GET/POST通用)
 * @param $param 变量名
 */
function q($param)
{
    $return = isset($_REQUEST[$param]) ? $_REQUEST[$param] : '';
    $types = array('string','integer','double');
    if (in_array(gettype($return), $types)) {
        $return = FilterHelper::F_htmlentities(trim($return));
    }

    return $return;
}

//实例化控制器类
function D($name='') {
    if(empty($name)) return false;

    static $_control = array();
    if(isset($_control[$name])) return $_control[$name];

    $control = new $class();
    $_control[$name] = $control;

    return $control;
}

/**
 * 实例化数据模型类
 */
function M($class)
{
    if(empty($class)) return false;

    static $_model = array();
    if(isset($_model[$class])) return $_model[$class];

    $model = new $class();
    $_model[$class] = $model;

    return $model;
}

/**
 * 实例化数据模型类
 */
function N($class)
{
    if(empty($class)) return false;

    static $_model = array();
    if(isset($_model[$class])) return $_model[$class];

    $model = new $class();
    $_model[$class] = $model;

    return $model;
}

//-------------------------时间方法-------------------------//

/**
 * 获取格式化之后的时间
 * @param $time int UNIX时间戳 默认为1取当前时间
 * @param $type string d:返回日期 t:返回时间 默认Null
 * @return $datetime
 */
function mkdate($time=1,$type=null)
{
    $return = null;

    $time = $time === 1 ? TIMESTAMP : $time;
    if (!$time) return null;

    switch ($type) {
        case 'd':
            $return = date("Y-m-d", $time);
        break;
        case 'z':
            $return = date("Y年m月d日 H点i分s秒", $time);
            break;
        case 'u':
            $return = date("H:i:s m/d/Y", $time);
            break;
        default:
            $return = date("Y-m-d H:i:s", $time);
        break;
    }

    return $return;
}

//获取上周一时间戳
function lastMonday()
{
  $t = time()-((date("w")?date("w"):7)-1)*86400;
  return mktime(0,0,0,date("m", $t),date("d", $t),date("Y", $t))-7*24*3600;
}

//获取上周日时间戳
function lastSunday()
{
  $t = time()+(7-(date("w")?date("w"):7))*86400;
  return mktime(23,59,59,date("m", $t),date("d", $t),date("Y", $t))-7*24*3600;
}

//获取本周一时间戳
function thisMonday()
{
  $t = time()-((date("w")?date("w"):7)-1)*86400;
  return mktime(0,0,0,date("m", $t),date("d", $t),date("Y", $t));
}

//获取本周日时间戳
function thisSunday()
{
  $t = time()+(7-(date("w")?date("w"):7))*86400;
  return mktime(23,59,59,date("m", $t),date("d", $t),date("Y", $t));
}

//获取$_SERVER['REQUEST_URI']值
function request_uri()
{
    if (isset($_SERVER['REQUEST_URI'])) {
        $uri = $_SERVER['REQUEST_URI'];
    } else {
        if (isset($_SERVER['argv'])) {
            $uri = $_SERVER['PHP_SELF'] .'?'. $_SERVER['argv'][0];
        } else {
            if (isset($_SERVER['QUERY_STRING'])) {
                $uri = $_SERVER['PHP_SELF'] .'?'. $_SERVER['QUERY_STRING'];
            } else {
                $uri = $_SERVER['PHP_SELF'];
            }
        }
    }
    
    return $uri;
}