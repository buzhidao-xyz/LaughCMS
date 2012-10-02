<?php
/**
 * base 所有类的父类
 * by wbq 2011-12-05
 */
class Base
{
    static protected $_model = 'Base';
    
    static protected $_control_suffix = 'Control';
    
    public function __construct()
    {
        $this->getSys();
        $this->isLoged();
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
        $user = session('userInfo');
        $sstate = session('sstate');
        $ustate = session('ustate');
        
        $url = parse_url($_SERVER['REQUEST_URI']);
		if (isset($url['query'])) {
			$res = preg_match("/^s=(vcode|login)(\/index)?(\/loginCheck)?(\&w=[1-9][0-9]{1,2})?(\&h=[1-9][0-9]{1,2})?$/",$url['query']);
        }

        if (!$res && (empty($user) || $sstate != $ustate)) {
            header("location:".__APP__.'/?r=login');
            exit;
        }
    }
    
    /**
     * 检测控制器类、类方法是否存在
     * @param $control 类名
     * @param $action 类方法名
     * @return $return array('control','function')
     */
    static protected function checkControl($control='', $action='')
    {
        $return = array(0=>'', 1=>'');
        
        $control = ucfirst($control).self::$_control_suffix;
        $control = class_exists($control)?$control:'';
        
        $return[1] = $control && method_exists($control, $action) ? $action : '';
        $return[0] = $return[1] ? $control : '';
        
        return $return;
    }

    /**
     * 解析orm映射字段
     * @param $fields array 要解析的字段数组
     * @param $table array 表名
     * @param $type bool 解析类型 true 正解析 false 反解析
     */
    protected function parseMap($fields,$table,$type=ture)
    {
        global $orm;
        $key = null;
        $return = array();

        if ($type == true) {

        } else {
            foreach ($fields as $k=>$v) {
                foreach ($table as $t) {
                    if (in_array($k, $orm[$t])) {
                        $keys = array_keys($orm[$t],$k);
                        $key = $keys[0];
                        break;
                    }
                }
                $key = $key ? $key : $k;
                $return[$key] = $v;
            }
        }

        return $return;
    }
}
