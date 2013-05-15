<?php
/**
 * 主控制类
 * by wbq 2011-12-01
 * 处理逻辑数据 执行具体的功能操作
 */
class IndexControl extends CommonControl
{
    //控制器名
    protected $_control = 'home';
    
    //定义缓存有效时间(秒)
    static public $_life_time = 10;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    //主页
    public function index()
    {
        $this->getIndexProductList();

        $this->getHomeScrollImage();

        $this->getAboutUs();

        $this->display('index.html');
    }

    //获取首页产品列表
    public function getIndexProductList()
    {
        //产品展示栏目id=6
        $columnid = 6;
        $SubColumnList = M("Column")->getSubColumn($columnid,3);
        if (is_array($SubColumnList) && !empty($SubColumnList)) {
            $i = 1;
            foreach ($SubColumnList as $k=>$v) {
                $SubColumnList[$k]['AutoIndex'] = $i;
                $i++;
                $ProductList = $this->getAllArchive($v['id'],8);
                $SubColumnList[$k]['ProductList'] = $ProductList['data'];
            }
        }
        
        $this->assign("ProductColumnID",$columnid);
        $this->assign("SubColumnList", $SubColumnList);
    }

    //获取轮播图片
    public function getHomeScrollImage()
    {
        $HomeScrollIMageListCount = array();
        $HomeScrollIMageList = M("Image")->getHomeScrollImage();

        $count = count($HomeScrollIMageList);
        for ($i= 1; $i<= $count; $i++) {
            $HomeScrollIMageListCount[] = $i;
        }
        $this->assign("HomeScrollIMageListCount", $HomeScrollIMageListCount);
        $this->assign("HomeScrollIMageList", $HomeScrollIMageList);
    }

    //获取关于我们信息
    public function getAboutUs()
    {
        $columnid = 10;
        $columnInfo = M("Column")->getColumn($columnid);
        $this->assign("AboutUs",$columnInfo);
    }
}
