<?php
/**
 * 主控制类
 * by wbq 2011-12-01
 * 处理逻辑数据 执行具体的功能操作
 */
class IndexControl extends CommonControl
{
    //定义类名
    static private $_class_name = 'Index Control';
    
    //定义缓存有效时间(秒)
    static public $_life_time = 10;
    
    //定义调用数组
    static private $_query = array(
        'control' => 'IndexControl',
        'action'  => 'index',
        'string'  => ''
    );
    
    public function __construct($query)
    {
        self::$_query = $query;
        parent::__construct();
    }
    
    public function index()
    {
        $data = "aaa";
        $this->assign("data",$data);
        $this->display('index.html');
    }
}
