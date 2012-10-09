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
     * 新节点入口
     */
    public function newNode()
    {
        $this->assign("groupTree",$this->_group_model->getGroupTree());
        $this->assign("nodeTree",$this->_node_model->getNodeTree());
        $this->display('node/add.html');
    }
}