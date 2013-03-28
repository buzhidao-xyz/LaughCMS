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
        $ArticleList = $this->getAllArchive(2,5);
        $this->assign("ArticleList", $ArticleList['data']);

        $this->getHomeScrollImage();

        $this->display('index.html');
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
