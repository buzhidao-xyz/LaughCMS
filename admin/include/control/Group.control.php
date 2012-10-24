<?php
/**
 * 组管理模块
 * by wbq 2012-9-6
 */
class GroupControl extends CommonControl
{
    //控制器
    static protected $_control = 'Group';

    private $_GROUP;

    public function __construct()
    {
        parent::__construct();

        if (!$this->_GROUP) $this->_GROUP = N('Group');
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
     * 保存新组
     */
    public function saveGroup()
    {
        $data = array(
            'title' => $this->_getTitle(),
            'createtime' => TIMESTAMP,
            'isshow'=> 1
        );

        $return = $this->_GROUP->addGroup($data);
        $this->ajaxReturn(0, '添加成功', $return);
    }

    public function manageGroup()
    {
        list($start,$length) = $this->getPages();
        $groupList = $this->_GROUP->getGroupTree($start,$length);

        $this->assign("total", $groupList['total']);
        $this->assign("groupList", $groupList['data']);
        $this->assign("page", getPage($groupList['total'],$this->_pagesize));
        $this->display("Group/manage.html");
    }
}