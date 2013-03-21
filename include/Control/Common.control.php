<?php
/**
 * 通用控制器基类
 * by wbq 2012-3-27
 */
class CommonControl extends BaseControl
{
	//控制器名
    protected $_control = null;
    //方法名
    protected $_action = null;

    //分页每页记录数
    protected $_pagesize = 15;

    //栏目id
    protected $_columnid;

    //初始化构造函数
    public function __construct()
    {
        parent::__construct();

        //导航栏目列表
        $this->ColumnList();
        //获取栏目详情
        $this->getColumn();

        $this->assign("control", $this->_control);
        $this->assign("action", $this->_action);
    }

    //获取分页页码
    protected function getPage()
    {
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        return $page;
    }

    //获取分页开始和条数
    protected function getPages()
    {
        $page = $this->getPage();
        $start = ($page-1)*$this->_pagesize;
        $length = $this->_pagesize;

        $this->assign('start',$start);
        $this->assign('length',$length);

        return array($start, $length);
    }

    //跳转到主页
    protected function _host()
    {
        header("location:".__APP__);
        exit;
    }

    //获取栏目ID
    protected function _getColumnID()
    {
        $columnid = q("columnid");
        $this->_columnid = $columnid;
        $this->assign("columnid",$columnid);
        return $columnid;
    }

    //获取顶部导航栏目列表
    protected function ColumnList()
    {
    	$ColumnList = M("Column")->getColumnList();
    	$this->assign("ColumnList", $ColumnList);
    }

    //获取栏目详细信息
    protected function getColumn()
    {
        $columnid = $this->_getColumnID();
        $Column = M("Column")->getColumn($columnid);
        $this->assign("Column", $Column);
    }
}
