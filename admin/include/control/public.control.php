<?php
/**
 * 公共模块
 * by laucen 2012-8-7
 */
class PublicControl extends CommonControl
{
	public function __construct()
    {
        parent::__construct();

        //$this->_system_model = N('System');
    }

    /**
     * 主入口
     */
    public function index()
    {

    }

    private function _getGroupid()
    {
        $groupid = isset($_REQUEST['groupid']) ? $_REQUEST['groupid'] : 0;

        return $groupid;
    }

    /**
     * head页
     */
    public function head()
    {
        $this->display('public/head.html');
    }

    /**
     * body页
     */
    public function body()
    {
        $groupid = $this->_getGroupid();
        $this->assign("groupid", $groupid);
        $this->display('public/body.html');
    }

    /**
     * 菜单
     */
    public function menu()
    {
        $groupid = $this->_getGroupid();
        $menu = $this->getGroup($groupid);

        if (is_array($menu) && !empty($menu)) {
            $this->assign('menu',$menu['cnode']);
            $this->display('public/menu.html');
        } else {
            $this->display('public/menu_index.html');
        }
    }

    /**
     * 欢迎页
     */
    public function welcome()
    {
    	$this->display('public/welcome.html');
    }
}