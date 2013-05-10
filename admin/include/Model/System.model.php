<?php
/**
 * 系统控制数据模型
 * by laucen 2012-5-17
 */
class System extends Base
{
    private $_phpinfo = array(
        'php_version'      => PHP_VERSION,
        'safe_mode'        => '',
        'register_globals' => '',
        'magic_quotes_gpc' => '',
        'upload_max_filesize' => '',
        'allow_url_fopen'  => '',
    );

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

    //获取服务器系统信息
    public function getPHPInfo($config=null)
    {
        if ($config) return ini_get($config);

        $return = array(
            'php_version' => PHP_VERSION
        );
        foreach ($this->_phpinfo as $k=>$v) {
            $return[$k] = $v ? $v : ini_get($k);
        }

        return $return;
    }

    /********************************系统参数********************************/

    //获取系统参数
    public function getSystemInfo()
    {
        
    }
}