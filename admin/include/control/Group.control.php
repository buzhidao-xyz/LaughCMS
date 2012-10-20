<?php
/**
 * 组管理模块
 * by wbq 2012-9-6
 */
class GroupControl extends CommonControl
{
    //控制器
    static protected $_control = 'Group';

    private $_group_model = null;
    private $_node_model = null;

    public function __construct()
    {
        parent::__construct();

        if (!$this->_group_model) $this->_group_model = N('Group');
        if (!$this->_node_model) $this->_node_model = N('Node');
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

    //新组模板
    public function newGroup()
    {
        $this->display("Group/add.html");
    }

    /**
     * 保存新组
     */
    public function saveNode()
    {

    }

    public function manageGroup()
    {

    }
}