<?php
/**
 * 系统管理模块
 * by wbq 2012-3-27
 */
class SystemControl extends CommonControl
{
    //控制器
    static protected $_control = 'System';

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
}
