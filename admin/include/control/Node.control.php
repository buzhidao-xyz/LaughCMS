<?php
/**
 * 节点管理模块
 * by wbq 2012-9-6
 */
class NodeControl extends CommonControl
{
    //控制器
    static protected $_control = 'Node';

    private $_GROUP = null;
    private $_NODE = null;

    public function __construct()
    {
        parent::__construct();

        if (!$this->_GROUP) $this->_GROUP = N('Group');
        if (!$this->_NODE) $this->_NODE = N('Node');
    }

    /**
     * 主入口
     */
    public function index()
    {
        
    }

    //获取节点id
    private function _getID()
    {
        $id = q('id') ? q('id') : 0;
        if (!FilterHelper::C_int($id)) $this->ajaxReturn(1,'ID错误！');

        return $id;
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
        if ($pid !== 0 && !FilterHelper::C_int($pid)) $this->ajaxReturn(1,'父节点错误');

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
        $groupTree = $this->_GROUP->getGroupTree();
        $this->assign("groupTree",$groupTree['data']);
        $this->assign("nodeTree",array());
        $this->display('node/add.html');
    }

    /**
     * 获取节点树
     */
    public function nodeTree()
    {
        $data = $this->_NODE->getNodeTree($this->_getGroupID());

        $nodeTree  = null;
        $nodeTree .= '<select name="pid">';
        $nodeTree .= '<option value="" >|-节点菜单</option>';
        foreach ($data as $v) {
            $nodeTree .= '<option value="'.$v['id'].'" >&nbsp;|-'.$v['title'].'</option>';
        }
        $nodeTree .= '</select>';

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
            'groupid' => $pid ? 0 : $groupid,
            'pid'     => $pid,
            'title'   => $title,
            'remark'  => $remark,
            'control' => $control,
            'action'  => $action,
            'createtime' => TIMESTAMP
        );
        $return = $this->_NODE->saveNode($data);
        $this->ajaxReturn(0,'节点添加成功',$return);
    }

    //管理节点
    public function manageNode()
    {
        list($start,$length) = $this->getPages();
        $nodeList = $this->_NODE->getNode($start,$length);
        if ($nodeList['total']) {
            foreach ($nodeList['data'] as $k => $v) {
                if ($v['pid']) $res = $this->_NODE->getNodeInfo($v['pid']);
                $nodeList['data'][$k]['pnode'] = $v['pid']&&isset($res) ? $res['title'] : '';
                $nodeList['data'][$k]['groupid'] = $v['pid']&&isset($res) ? $res['groupid'] : $v['groupid'];
                if ($v['groupid']) $res = $this->_GROUP->getGroup($v['groupid']);
                $nodeList['data'][$k]['group'] = $v['groupid']&&isset($res) ? $res[0]['title'] : '';
            }
        }

        $this->assign("total", $nodeList['total']);
        $this->assign("nodeList", $nodeList['data']);

        $groupTree = $this->_GROUP->getGroupTree();
        $this->assign("groupTree",$groupTree['data']);

        $this->assign("page", getPage($nodeList['total'],$this->_pagesize));
        $this->display("node/manage.html");
    }

    //修改节点信息
    public function upNode()
    {
        $id = $this->_getID();
        $groupid = $this->_getGroupID();
        $pid = $this->_getPID();
        $title = $this->_getTitle();
        $control = $this->_getControl();
        $remark = $this->_getRemark();
        $action = $this->_getAction();

        $data = array(
            'groupid' => $pid ? 0 : $groupid,
            'pid'     => $pid,
            'title'   => $title,
            'remark'  => $remark,
            'control' => $control,
            'action'  => $action
        );
        $return = $this->_NODE->upNode($id,$data);
        if ($return) {
            $this->ajaxReturn(0,'节点修改成功！',$return);
        } else {
            $this->ajaxReturn(1,'节点修改失败！',$return);
        }
    }

    //删除节点
    public function deleteNode()
    {
        $id = $this->_getID();
        $return = $this->_NODE->delNode($id);
        if ($return) {
            $this->ajaxReturn(0,'节点删除成功！',$return);
        } else {
            $this->ajaxReturn(1,'节点删除失败！',$return);
        }
    }
}