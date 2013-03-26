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
    //栏目内容
    protected $_Column;

    //初始化构造函数
    public function __construct()
    {
        parent::__construct();

        //导航栏目列表
        $this->ColumnList();
        //获取栏目详情
        $this->getColumn();
        //计算当前目录
        $this->getCurrentPosition();

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
        $this->_Column = $Column;
        $this->assign("Column", $Column);
    }

    //计算当前目录
    public function getCurrentPosition()
    {
        $CurrentPosition = '<a href="'.__APP__.'">首页</a>';
        $Position = ' > <a href="'.__APP__.'/index.php?s='.$this->_Column['control'].'/'.$this->_Column['action'].'&columnid='.$this->_Column['id'].'">'.$this->_Column['columnname'].'</a>';

        $Position = $this->getParentColumnPosition($this->_Column['parentid'],$Position);

        $CurrentPosition .= $Position;
        $this->assign("CurrentPosition", $CurrentPosition);
    }

    //获取父栏目当前位置
    public function getParentColumnPosition($columnid=null,$Position=null)
    {
        $Column = M("Column")->getColumn($columnid);
        if (!empty($Column)) {
            $Position = ' > <a href="'.__APP__.'/index.php?s='.$Column['control'].'/'.$Column['action'].'&columnid='.$Column['id'].'">'.$Column['columnname'].'</a>'.$Position;
            if ($Column['parentid']) $Position = $this->getParentColumnPosition($Column['parentid'],$Position);
        }

        return $Position;
    }

    /**
     * 获取某个栏目下面的所有文档
     * @param $columnid int 栏目id
     * @param $num int 要获取的条数
     */
    public function getAllArticle($columnid=null,$num=0)
    {
        $columnid = $columnid ? $columnid : $this->_columnid;
        $columnids = M("Column")->getChildrenColumnID($columnid);

        $where = empty($columnids) ? array() : array("columnid"=>array("in",$columnids));
        return M("Article")->getArticle(null,0,$num,$where,1);
    }
}
