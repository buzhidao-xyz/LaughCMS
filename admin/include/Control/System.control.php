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
        $systemInfo = array();
        $systemdata = M("System")->getSystemInfo();
        if (is_array($systemdata)&&!empty($systemdata)) {
            foreach ($systemdata as $d) {
                $systemInfo[$d['cfggroupid']][] = $d;
            }
        }
        $this->assign("SystemInfo",$systemInfo);
        $this->display("System/SystemInfo.html");
    }

    //保存系统信息
    public function saveSystemInfo()
    {
        dump($_REQUEST);exit;
        $return = M("System")->saveSystemInfo();
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
        if (empty($cfgname)) $this->ajaxReturn(1,"请填写变量名！");
        $cfgvalue = q("cfgvalue");
        $cfginfo = q("cfginfo");
        if (empty($cfginfo)) $this->ajaxReturn(1,"请填写变量说明！");
        $cfgtype = q("cfgtype");
        if (empty($cfgtype)) $this->ajaxReturn(1,"请选择变量类型！");
        $cfggroupid = q("cfggroupid");
        if (empty($cfggroupid)) $this->ajaxReturn(1,"请选择所在分组！");

        $return = M("System")->saveSystemcfg($cfgname,$cfgvalue,$cfginfo,$cfgtype,$cfggroupid);
        if ($return) {
            $this->ajaxReturn(0,"变量添加成功！");
        } else {
            $this->ajaxReturn(1,"变量添加失败！");
        }
    }
}
