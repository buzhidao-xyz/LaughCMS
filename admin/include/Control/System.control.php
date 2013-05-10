<?php
/**
 * 系统管理模块
 * by wbq 2012-3-27
 */
class SystemControl extends CommonControl
{
    //控制器
    protected $_Control = 'System';

    private $_SYSTEM;

    public function __construct()
    {
        parent::__construct();

        if (!$this->_SYSTEM) $this->_SYSTEM = M('System');
    }

    //主入口
    public function index(){}

    //一键更新网站
    public function updateAll()
    {
        
    }

    //更新系统缓存
    public function makeSystemCache()
    {
        
    }

    /********************************系统参数********************************/

    //系统参数
    public function systemInfo()
    {
        $systemInfo = M("System")->getSystemInfo();
        $this->display("System/SystemInfo.html");
    }

    //保存系统信息
    public function saveSystemInfo()
    {
        
    }

    //添加新变量
    public function addSystemcfg()
    {
        $this->assign("accessStatus",1);
        $this->display("System/addSystemcfg.html");
    }

    //保存新变量
    public function saveSystemcfg()
    {
        $cfgname = q("cfgname");
        $cfgvalue = q("cfgvalue");
        $cfginfo = q("cfginfo");
        $cfgtype = q("cfgtype");
        $cfggroupid = q("cfggroupid");


    }
}
