<<<<<<< HEAD
<?php
/**
 * 控制器基类
 * by laucen 2012-5-16
 */
class BaseControl
{
    static protected $_model = 'Base';
    
    static protected $_control_suffix = 'Control';

    //模板解析类对象
    protected $_template = null;
    
    public function __construct()
    {
        if ($this->_template == null) $this->_template = new Template();

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
        $sys = Memcacheg::get('sys');
        
        if (!$sys) {
            $sql = "select * from ".TBF."system";
            $sys = DBConnect::GetAll($sql);
            $sys = $this->_dealSys($sys);
            if (is_array($sys) && !empty($sys)) {
                $sys['admin_host'] = $sys['host'].'/'.$sys['admin_path'].'/';
            } else {
                return false;
            }
            
            Memcacheg::set('sys',$sys,3600);
        }
        
        assign("sys", $sys);
    }

    /**
     * 处理sys
     */
    private function _dealSys($sys)
    {
        if (!is_array($sys) || empty($sys)) return false;

        $return = array();
        foreach ($sys as $k => $v) {
            $return[$v['cfgname']] = $v['cfgvalue'];
        }

        return $return;
    }
    
    /**
     * 登录验证程序
     */
    private function isLoged()
    {
		$res = null;
        $sstate = session('sstate');
        $ustate = session('ustate');
        
        $url = parse_url($_SERVER['REQUEST_URI']);
		if (isset($url['query'])) {
			$res = preg_match("/^s=(vcode|login)(\/index)?(\/loginCheck)?(\&w=[1-9][0-9]{1,2})?(\&h=[1-9][0-9]{1,2})?$/",$url['query']);
        }

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
=======
<?php
/**
 * 控制器基类
 * by laucen 2012-5-16
 */
class BaseControl
{
    static protected $_model = 'Base';
    
    static protected $_control_suffix = 'Control';

    //模板解析类对象
    protected $_template = null;
    
    public function __construct()
    {
        if ($this->_template == null) $this->_template = new Template();

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
        $sys = Memcacheg::get('sys');
        
        if (!$sys) {
            $sql = "select * from ".TBF."system";
            $sys = DBConnect::GetAll($sql);
            $sys = $this->_dealSys($sys);
            if (is_array($sys) && !empty($sys)) {
                $sys['admin_host'] = $sys['host'].'/'.$sys['admin_path'].'/';
            } else {
                return false;
            }
            
            Memcacheg::set('sys',$sys,3600);
        }
        
        assign("sys", $sys);
    }

    /**
     * 处理sys
     */
    private function _dealSys($sys)
    {
        if (!is_array($sys) || empty($sys)) return false;

        $return = array();
        foreach ($sys as $k => $v) {
            $return[$v['cfgname']] = $v['cfgvalue'];
        }

        return $return;
    }
    
    /**
     * 登录验证程序
     */
    private function isLoged()
    {
		$res = null;
        $sstate = session('sstate');
        $ustate = session('ustate');
        
        $url = parse_url($_SERVER['REQUEST_URI']);
		if (isset($url['query'])) {
			$res = preg_match("/^s=(vcode|login)(\/index)?(\/loginCheck)?(\&w=[1-9][0-9]{1,2})?(\&h=[1-9][0-9]{1,2})?$/",$url['query']);
        }

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
>>>>>>> parent of e0d681f... 1
