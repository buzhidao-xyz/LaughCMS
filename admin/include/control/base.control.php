<?php
/**
 * 控制器基类
 * by laucen 2012-5-16
 */
class BaseControl
{
    static protected $_control = 'Base';
    
    protected $_control_suffix = 'Control';

    protected $_template;   //模板解析类对象
    protected $_userInfo;   //用户信息

    protected $_system_model = null;

    static public $_sys = null;
    
    public function __construct()
    {
        if (!$this->_template) $this->_template = new Template();
        if (!$this->_system_model) $this->_system_model = new System();

        $this->userInfo = session('userInfo');

        $this->getSys();
        $this->isLoged();

        $this->assign('userInfo', $this->userInfo);
    }
    
    /**
     * 获取系统信息
     */
    private function getSys()
    {
        self::$_sys = self::$_sys ? self::$_sys : $this->_system_model->getSys();
        $this->assign("sys", self::$_sys);
    }
    
    /**
     * 登录验证程序
     */
    private function isLoged()
    {
		$res = null;
        $sstate = session('sstate'); $ustate = session('ustate');
        
        $url = parse_url($_SERVER['REQUEST_URI']);
		if (isset($url['query'])) $res = preg_match("/^s=(vcode|login)(\/index)?(\/loginCheck)?(\&w=[1-9][0-9]{1,2})?(\&h=[1-9][0-9]{1,2})?$/",$url['query']);

        if (!$res && (empty($this->userInfo) || $sstate != $ustate)) {
            header("location:".__APP__.'/?s=login');
            exit;
        }
    }
    
    /**
     * 检测控制器类、类方法是否存在
     * @param $control 类名
     * @param $function 类方法名
     * @return $return array('control','function')
     */
    static protected function checkControl($control='', $function='')
    {
        $return = array(0=>'', 1=>'');
        
        $control = ucfirst($control).self::$_control_suffix;
        $control = class_exists($control)?$control:'';
        
        $return[1] = $control&&method_exists($control, $function)?$function:'';
        $return[0] = $return[1]?$control:'';
        
        return $return;
    }

    /**
     * 赋值
     */
    protected function assign($key,$value)
    {
        $this->_template->assign($key,$value);
    }

    /**
     * 解析模版
     * @param $tpl string 模版字符串 
     */
    protected function display($tpl)
    {
        $this->_template->display($tpl);
    }
}
