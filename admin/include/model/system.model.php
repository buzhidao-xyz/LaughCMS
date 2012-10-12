<?php
/**
 * 系统控制数据模型
 * by laucen 2012-5-17
 */
class System extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
     * 获取系统信息
     */
    public function getSys()
    {
        $sys = Memcacheg::get('sys');
        
        if (!$sys) {
            $sys = $this->_dealSys(T('system')->select());
            if (is_array($sys) && !empty($sys)) $sys['admin_host'] = $sys['host'].'/'.$sys['admin_path'].'/';
            Memcacheg::set('sys',$sys);
        }
        
        return $sys;
    }

    /**
     * 处理sys
     */
    private function _dealSys($sys=null)
    {
        if (!is_array($sys) || empty($sys)) return false;

        $return = array();
        foreach ($sys as $k => $v) {
            $return[$v['cfgname']] = $v['cfgvalue'];
        }

        return $return;
    }
}