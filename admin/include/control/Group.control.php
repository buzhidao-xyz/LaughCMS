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

    //获取组节点id
    public function _getID()
    {
        $id = q('id');
        if (!FilterHelper::C_int($id)) $this->ajaxReturn(1,'id错误');

        return $id;
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

    //获取是否显示
    private function _getIsShow()
    {
        $isshow = q('isshow');
        if ((int)$isshow !== 0 && (int)$isshow !== 1) $this->ajaxReturn(1,'是否显示组菜单错误');

        return $isshow;
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

    //保存新组信息
    public function saveGroup()
    {
        if (!$this->isAjax()) return false;

        $title = $this->_getTitle();
        if ($this->_GROUP->getGroupByTitle($title)) $this->ajaxReturn(0, '组名称已存在');

        $data = array(
            'title' => $title,
            'createtime' => TIMESTAMP,
            'isshow'=> 1
        );
        $return = $this->_GROUP->addGroup($data);

        $this->ajaxReturn(0, '添加成功', $return);
    }

    //更新组信息
    public function upGroup()
    {
        if (!$this->isAjax()) return false;

        $id = $this->_getID();
        $title = $this->_getTitle();
        $isshow = $this->_getIsShow();

        $res = $this->_GROUP->getGroupByTitle($title);
        if ($res && $res['id'] != $id) $this->ajaxReturn(1, '组名称已存在');

        $data = array(
            'title' => $title,
            'isshow'=> $isshow
        );
        $return = $this->_GROUP->upGroup($id, $data);
        if ($return) $this->ajaxReturn(0, '更新成功');
        else $this->ajaxReturn(1, '更新失败');
    }
}