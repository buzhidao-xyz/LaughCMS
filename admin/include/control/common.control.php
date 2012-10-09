<?php
/**
 * 通用控制器
 * by wbq 2012-3-21
 */
class CommonControl extends BaseControl
{
    //用户权限
    protected $userAccess;

    //缓存当前访问的控制器名
    static protected $_control;

    /**
     * 初始化并读取用户权限信息
     */
	public function __construct()
	{
        parent::__construct();

        new AccessControl();

        $this->getUserAccess();
        $this->setUserAccess();
    }

    /**
     * 获取用户权限信息
     */
    public function getUserAccess()
    {
         $this->userAccess = session('userAccess');
    }

    /**
     * 设置用户权限信息
     */
    public function setUserAccess()
    {
        $this->assign('userAccess', $this->userAccess);
    }

    /**
     * 获取某个组的信息
     * @param $groupid string 组id
     */
    public function getGroup($groupid)
    {
        $return = array();

        foreach ($this->userAccess as $g) {
            if ($g['id'] == $groupid) {
                $return = $g;
                break;
            }
        }

        return $return;
    }

    /**
     * 验证用户权限
     * @param $control string 要访问的类/控制器
     * @param $action string 要访问的节点/方法
     */
    public function checkUserAccess($control,$action)
    {
        $return = false;
        $control = str_replace("Control", "", $control);

        $status = $this->_isDBNode($control,$action);

        if ($status) {
            foreach ($this->userAccess as $v) {
                if (isset($v['cnode']) && is_array($v['cnode']) && !empty($v['cnode'])) {
                    foreach ($v['cnode'] as $v1) {
                        if (isset($v1['cnode']) && is_array($v1['cnode']) && !empty($v1['cnode'])) {
                            foreach ($v1['cnode'] as $v2) {
                                if (ucfirst($v2['control']) == ucfirst($control) && $v2['action'] == $action) {
                                    $return = true;
                                    break 3;
                                }
                            }
                        }
                    }
                }
            }
        } else $return = true;

        return $return;
    }

    /**
     * 检测节点内增删改查操作接口     
     * @param $control string 要访问的类/控制器
     * @param $action string 访问的节点/方法名(增删改查等)
     */
    protected function _checkNodeAccess($control,$action)
    {
        if (!$this->checkUserAccess($control,$action)) $this->_host();
    }

    /**
     * 检查一个节点是否是有效的数据库节点
     * @param $control string 要访问的类/控制器
     * @param $action string 要访问的节点/方法
     */
    protected function _isDBNode($control,$action)
    {
        $return = null;

        $where = array(
            'control' => strtolower($control),
            'action'  => $action
        );

        return T('node')->field('id')->where($where)->count() ? true : false;
    }

    /**
     * 跳转到主页
     */
    protected function _host()
    {
        header("location:".__APP__);
        exit;
    }
}
