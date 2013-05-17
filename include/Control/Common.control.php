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
        //获取友情链接
        $this->getFlink();
        //获取导航列表
        $this->getNavigation();

        //输出配置信息
        $this->getConfig();
    }

    //获取分页页码
    protected function getPage()
    {
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        return $page;
    }

    /**
     * 获取分页开始和条数
     * @param int $pagesize 每页显示记录数
     */
    protected function getPages($pagesize=null)
    {
        $pagesize = $pagesize ? $pagesize : $this->_pagesize;

        $page = $this->getPage();
        $start = ($page-1)*$pagesize;

        $this->assign('start',$start);
        $this->assign('length',$pagesize);

        return array($start, $pagesize);
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
    protected function getColumn($columnid=null)
    {
        $columnid = $columnid ? $columnid : $this->_getColumnID();
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
    public function getAllArchive($columnid=null,$num=0)
    {
        $columnid = $columnid ? $columnid : $this->_columnid;
        $columnids = M("Column")->getChildrenColumnID($columnid);

        list($start,$length) = $this->getPages();
        $where = empty($columnids) ? array() : array("columnid"=>array("in",$columnids));
        $length = $num ? $num : $length;
        return M("Archive")->getArchive(null,$start,$length,$where,1);
    }

    /**
     * 格式化文档列表
     * @param $data array 文档数组列表
     */
    public function dealArchive($data=array())
    {
        if (!is_array($data) || empty($data)) return array();

        //加入文档号
        $i = 1;
        foreach ($data as $k=>$d) {
            $data[$k]['AutoIndex'] = $i;
            $i++;
        }

        return $data;
    }

    /**
     * 获取友情链接
     */
    public function getFlink()
    {
        $FlinkList = array();
        $dataList = M("Plugin")->getFlink();
        if (is_array($dataList)&&!empty($dataList)) {
            $i = 1;
            foreach ($dataList as $k=>$v) {
                $linkInfo = array(
                    'linkname' => $v['linkname'],
                    'linkurl'  => $v['linkurl'],
                    'catalogid'=> $v['catalogid'],
                    'createtime'=>$v['createtime']
                );
                if (isset($FlinkList[$v['catalogid']])) {
                    $FlinkList[$v['catalogid']]['flinklist'][] = $linkInfo;
                } else {
                    $FlinkList[$v['catalogid']] = array(
                        'autoIndex'   => $i,
                        'catalogname' => $v['catalogname'],
                        'sort'        => $v['sort'],
                        'flinklist'   => array($linkInfo)
                    );
                }
                $i++;
            }
        }
        $this->assign("FlinkList",$FlinkList);
    }

    //获取底部导航信息
    public function getNavigation()
    {
        $NavigationList = array();
        $NavigationList = T("navigation")->where(array("flag"=>1))->select();
    }

    //获取配置信息并打印输出 - SEO优化
    public function getConfig()
    {
        $Config = array(
            'host' => C('CACHE.host'),
            'sitename' => C('CACHE.sitename'),
            'keywords' => C('CACHE.keywords'),
            'description' => C('CACHE.description'),
        );
        // dump($Config);exit;
        $this->assign('Config', $Config);
    }
}
