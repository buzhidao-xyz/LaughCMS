<<<<<<< HEAD
<?php
/**
 * 节点管理模块
 * by wbq 2012-9-6
 */
class NodeControl extends CommonControl
{
    //组名称
    private $_group = 'node';

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
        $this->assign("nodeTree",$this->_node_model->getNodeTree());
        $this->display('node/add.html');
    }
=======
<?php
/**
 * 节点管理模块
 * by wbq 2012-9-6
 */
class NodeControl extends CommonControl
{
    //组名称
    private $_group = 'node';

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
        $this->assign("nodeTree",$this->_node_model->getNodeTree());
        $this->display('node/add.html');
    }
>>>>>>> parent of e0d681f... 1
}