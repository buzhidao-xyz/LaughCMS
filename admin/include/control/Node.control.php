<?php
/**
 * 节点管理模块
 * by wbq 2012-9-6
 */
class NodeControl extends CommonControl
{
    //控制器
    static protected $_control = 'Node';

    private $_group_model = null;
    private $_node_model = null;

    public function __construct()
    {
        parent::__construct();

        if (!$this->_group_model) $this->_group_model = N('Group');
        if (!$this->_node_model) $this->_node_model = N('Node');
    }

    /**
     * 主入口
     */
    public function index()
    {
        
    }

    /**
     * 获取组ID
     */
    private function _getGroupID()
    {
        $groupid = q('groupid') ? q('groupid') : 0;
        if (!FilterHelper::C_int($groupid)) $this->ajaxReturn(1,'请选择组');

        return $groupid;
    }

    /**
     * 获父节点ID
     */
    private function _getPID()
    {
        $pid = q('pid') ? q('pid') : 0;
        if (!FilterHelper::C_int($pid) && $pid !== 0) $this->ajaxReturn(1,'父节点错误');

        return $pid;
    }

    /**
     * 获取节点名称
     */
    private function _getTitle()
    {
        $title = q('title');
        if (!$title) $this->ajaxReturn(1,'请填写名称');

        return $title ? FilterHelper::F_htmlentities($title) : '';
    }

    /**
     * 获取节点描述
     */
    private function _getRemark()
    {
        $remark = q('remark');

        return $remark ? FilterHelper::F_htmlentities($remark) : '';
    }

    /**
     * 获取节点控制器
     */
    private function _getControl()
    {
        $control = q('control');

        return $control ? FilterHelper::F_htmlentities($control) : '';
    }

    /**
     * 获取节点方法
     */
    private function _getAction()
    {
        $action = q('action');

        return $action ? FilterHelper::F_htmlentities($action) : '';
    }

    /**
     * 新节点入口
     */
    public function newNode()
    {
        $this->assign("groupTree",$this->_group_model->getGroupTree());
        $this->assign("nodeTree",array());
        $this->display('node/add.html');
    }

    /**
     * 获取节点树
     */
    public function nodeTree()
    {
        $data = $this->_node_model->getNodeTree($this->_getGroupID());

        $nodeTree = '<option value="" >|-节点菜单</option>';
        foreach ($data as $v) {
            $nodeTree .= '<option value="'.$v['id'].'" >&nbsp;|-'.$v['title'].'</option>';
        }

        return array('status'=>0, 'info'=>'', 'data'=>$nodeTree);
    }

    /**
     * 保存新节点
     */
    public function saveNode()
    {
        $groupid = $this->_getGroupID();
        $pid = $this->_getPID();
        $title = $this->_getTitle();
        $control = $this->_getControl();
        $remark = $this->_getRemark();
        $action = $this->_getAction();

        $data = array(
            'groupid' => $groupid,
            'pid'     => $pid,
            'title'   => $title,
            'control' => $control,
            'remark'  => $remark,
            'action'  => $action,
            'create_time' => TIMESTAMP
        );
        $return = $this->_node_model->saveNode($data);

        $this->ajaxReturn(0,'节点添加成功',$return);
    }

    //管理节点
    public function manageNode()
    {
        $this->display("node/manage.html");
    }
}