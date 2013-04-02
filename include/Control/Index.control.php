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
        //新闻资讯栏目id=2
        $columnid = 2;
        $ArticleList = $this->getAllArchive($columnid,5);
        $this->assign("ArticleList", $ArticleList['data']);

        $ProductList = $this->getIndexProductList();

        $this->getHomeScrollImage();

        $this->display('index.html');
    }

    //获取首页产品列表
    public function getIndexProductList()
    {
        //产品展示栏目id=6
        $columnid = 6;

        $ProductList = $this->getAllArchive($columnid,8);
        $this->assign("ProductList", $ProductList['data']);
        // dump($ProductList['data']);exit;
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
}
