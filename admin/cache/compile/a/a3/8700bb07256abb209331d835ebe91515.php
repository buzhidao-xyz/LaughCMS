<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/green/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="captitle">
	<h5>文件管理 >> 修改/新建文件</h5>
</div>
<div class="formContainer">
	<div class="formtitle"><h5>修改/新建文件</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Plugin/fileEdit&action=save" method="post" class="newform">
		<input type="hidden" name="dir" value="./二" />
		<input type="hidden" name="oldfilename" value="route.php" />
		<ul class="formbody">
			<li class="formblock">
				<span>文件目录:</span>
				<input type="text" name="newdir" value="./二" class="input w250" />（. 表示根目录 ，不允许用 “..” 形式的路径） 
			</li>
			<li class="formblock">
				<span>文件名称:</span>
				<input type="text" name="newfilename" value="route.php" class="input w250" />
			</li>
			<li class="formautoblock">
				<span>文件内容:</span>
				<textarea name="filecontent" rows="35" cols="110">&lt;?php
/**
 * 路由器 重新定位url路径
 * by wbq 2011-11-09
 */

class Route
{
    static private $_current_url;
    
    /**
     * 定义查询数组
     */
    static private $_query = array(
        'control' =&gt; 'IndexControl',
        'action'  =&gt; 'index',
        'string'  =&gt; ''
    );

    //控制器后缀
    static private $_control = 'Control';
    
    public function __construct()
    {
        self::_getUrl();
        self::_checkUrl();
        self::_analyze();
        self::_call();
    }
    
    /**
     * 获取当前访问url
     */
    static private function _getUrl()
    {
        self::$_current_url = urldecode(__HOST__.request_uri());
    }
    
    /**
     * 验证当前url有效性
     */
    static private function _checkUrl()
    {
        $url = &quot;#^http://[0-9a-z.:-]+/(&quot;.__SELF__.&quot;/)?(index\.php)?(\?s=.+)?$#i&quot;;
        if (!preg_match($url, self::$_current_url)) {
            self::_host();
        }
    }
    
    /**
     * 分析url
     */
    private function _analyze()
    {
        $url_array = parse_url(self::$_current_url);
        if (isset($url_array['query'])) {
            preg_match_all(&quot;/^s=([0-9a-z]+)(\/)?([0-9a-z]+)?(&amp;.+)*/i&quot;, $url_array['query'], $url_array);
            
            self::$_query['control'] = ucfirst($url_array[1][0]).self::$_control;
            if (!class_exists(self::$_query['control'])) $this-&gt;_host();
            
            self::$_query['action'] = $url_array[3][0]?$url_array[3][0]:'index';
            if (!method_exists(self::$_query['control'], self::$_query['action'])) self::$_query['action'] = 'index';
            
            if (!empty($url_array[4])) {
                $query_string = explode('&amp;', $url_array[4][0]);
                
                foreach ($query_string as $value) {
                    if ($value &amp;&amp; strstr($value, '=')) {
                        $value = explode('=', $value);
                        self::$_query['string'][$value[0]] = $value[1];
                    }
                }
            }
        }
    }
    
    /**
     * 跳转到主页(host)
     */
    static private function _host()
    {
        header(&quot;location:&quot;./laugh/admin);
        exit;
    }
    
    /**
     * 访问控制层类 方法
     */
    static private function _call()
    {
        $_control  = self::$_query['control'];
        $_action = self::$_query['action'];
        
        $obj = new $_control(self::$_query);
        $obj-&gt;$_action();
    }
}
</textarea>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2 fleft" value="保存" />
				<input type="button" id="goback" name="goback" class="button btngreen2 fleft" value="返回" style="margin-left:50px;" />
			</li>
		</ul>
	</form>
</div>
<script type="text/javascript">

</script>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/green/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/green/js/public.js"></script>
<script type="text/javascript" src="themes/green/js/common.js"></script>
<script type="text/javascript" src="themes/green/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>