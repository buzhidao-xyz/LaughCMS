<?php
/**
 * 系统管理模块
 * by wbq 2012-3-27
 */
class SystemControl extends CommonControl
{
    //控制器
    static protected $_control = 'System';

    private $_system_model = null;

    public function __construct()
    {
        parent::__construct();

        $this->_system_model = N('System');
    }

    /**
     * 主入口
     */
    public function index()
    {
        $node = $this->getFirstNode($this->_group);

        assign('node', $node);
        $this->display('system/index.html');
    }

    /**
     * 获取roleid
     */
    private function getRoleId($roleid=null)
    {
        $roleid = isset($_REQUEST['roleid']) ? $_REQUEST['roleid'] : 0;
        $roleid = FilterHelper::C_Numeric($roleid) ? $roleid : 0;

        return $roleid;
    }

    /**
     * 菜单
     */
    public function menu()
    {
        $group = $this->getGroup($this->_group);

        assign('group', $group);
        $this->display('system/menu.html');
    }

    /**
     * 注册与访问控制
     */
    public function access()
    {
        $this->display('system/access.html');
    }

    public function role()
    {
        $roles = array();
        $roleid = $this->getRoleId();

        $roles = $this->_system_model->getRole($roleid);
        assign('roles', $roles);
        
        $this->display('system/role.html');
    }

    public function newRole()
    {
        $this->_checkNodeAccess($this->_group,'role');

        $this->display('system/newrole.html');
    }

    public function roleUpdate()
    {

    }

    public function roleDelete()
    {

    }

    public function roleUser()
    {

    }

    public function group()
    {
        $group = array();

        $this->display('system/group.html');
    }

    public function node()
    {
        
    }
}
