&lt;?php
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
        &#039;control&#039; =&gt; &#039;IndexControl&#039;,
        &#039;action&#039;  =&gt; &#039;index&#039;,
        &#039;string&#039;  =&gt; &#039;&#039;
    );

    //控制器后缀
    static private $_control = &#039;Control&#039;;
    
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
        if (isset($url_array[&#039;query&#039;])) {
            preg_match_all(&quot;/^s=([0-9a-z]+)(\/)?([0-9a-z]+)?(&amp;.+)*/i&quot;, $url_array[&#039;query&#039;], $url_array);
            
            self::$_query[&#039;control&#039;] = ucfirst($url_array[1][0]).self::$_control;
            if (!class_exists(self::$_query[&#039;control&#039;])) $this-&gt;_host();
            
            self::$_query[&#039;action&#039;] = $url_array[3][0]?$url_array[3][0]:&#039;index&#039;;
            if (!method_exists(self::$_query[&#039;control&#039;], self::$_query[&#039;action&#039;])) self::$_query[&#039;action&#039;] = &#039;index&#039;;
            
            if (!empty($url_array[4])) {
                $query_string = explode(&#039;&amp;&#039;, $url_array[4][0]);
                
                foreach ($query_string as $value) {
                    if ($value &amp;&amp; strstr($value, &#039;=&#039;)) {
                        $value = explode(&#039;=&#039;, $value);
                        self::$_query[&#039;string&#039;][$value[0]] = $value[1];
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
        $_control  = self::$_query[&#039;control&#039;];
        $_action = self::$_query[&#039;action&#039;];
        
        $obj = new $_control(self::$_query);
        $obj-&gt;$_action();
    }
}