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

    public function __construct()
    {
        parent::__construct();

        if (!$this->_group_model) $this->_group_model = N('Group');
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

    //新组模板
    public function newGroup()
    {
        $this->display("Group/add.html");
    }

    /**
     * 保存新组
     */
    public function saveGroup()
    {
        $data = array(
            'title' => $this->_getTitle(),
            'createtime' => TIMESTAMP,
            'isshow'=> 1
        );

        $return = $this->_group_model->addGroup($data);
        $this->ajaxReturn(0, '添加成功', $return);
    }

    public function manageGroup()
    {
        $this->display("Group/manage.html");
    }
}