&amp;lt;?php
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
        &amp;#039;control&amp;#039; =&amp;gt; &amp;#039;IndexControl&amp;#039;,
        &amp;#039;action&amp;#039;  =&amp;gt; &amp;#039;index&amp;#039;,
        &amp;#039;string&amp;#039;  =&amp;gt; &amp;#039;&amp;#039;
    );

    //控制器后缀
    static private $_control = &amp;#039;Control&amp;#039;;
    
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
        $url = &amp;quot;#^http://[0-9a-z.:-]+/(&amp;quot;.__SELF__.&amp;quot;/)?(index\.php)?(\?s=.+)?$#i&amp;quot;;
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
        if (isset($url_array[&amp;#039;query&amp;#039;])) {
            preg_match_all(&amp;quot;/^s=([0-9a-z]+)(\/)?([0-9a-z]+)?(&amp;amp;.+)*/i&amp;quot;, $url_array[&amp;#039;query&amp;#039;], $url_array);
            
            self::$_query[&amp;#039;control&amp;#039;] = ucfirst($url_array[1][0]).self::$_control;
            if (!class_exists(self::$_query[&amp;#039;control&amp;#039;])) $this-&amp;gt;_host();
            
            self::$_query[&amp;#039;action&amp;#039;] = $url_array[3][0]?$url_array[3][0]:&amp;#039;index&amp;#039;;
            if (!method_exists(self::$_query[&amp;#039;control&amp;#039;], self::$_query[&amp;#039;action&amp;#039;])) self::$_query[&amp;#039;action&amp;#039;] = &amp;#039;index&amp;#039;;
            
            if (!empty($url_array[4])) {
                $query_string = explode(&amp;#039;&amp;amp;&amp;#039;, $url_array[4][0]);
                
                foreach ($query_string as $value) {
                    if ($value &amp;amp;&amp;amp; strstr($value, &amp;#039;=&amp;#039;)) {
                        $value = explode(&amp;#039;=&amp;#039;, $value);
                        self::$_query[&amp;#039;string&amp;#039;][$value[0]] = $value[1];
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
        header(&amp;quot;location:&amp;quot;./laugh/admin);
        exit;
    }
    
    /**
     * 访问控制层类 方法
     */
    static private function _call()
    {
        $_control = self::$_query[&amp;#039;control&amp;#039;];
        $_action = self::$_query[&amp;#039;action&amp;#039;];

        //定义CONTROL和ACTION
        define(&amp;quot;CONTROL&amp;quot;, str_replace(self::$_control, &amp;quot;&amp;quot;, $_control));
        define(&amp;quot;ACTION&amp;quot;, $_action);
        
        $obj = new $_control(self::$_query);
        $obj-&amp;gt;$_action();
    }
}