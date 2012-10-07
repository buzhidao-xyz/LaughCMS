<?php
/**
 * 系统首页控制器
 * by wbq 2011-12-21
 */
class IndexControl extends CommonControl
{
    //定义类名
    static private $_class_name = 'Index Control';
    
    //定义缓存有效时间(秒)
    static public $_life_time = 10;
    
    //定义调用数组
    static private $_query = array(
        'control'   => 'Index_Control',
        'action'    => 'index',
        'string'    => ''
    );
    
    public function __construct($query)
    {
		parent::__construct();
        self::$_query = $query;
    }
    
    /**
     * 主页控制
     */
    public function index()
    {
        $cache_id = self::$_query['control'].'_'.self::$_query['action'];
        $data = FileCache::get($cache_id);
        
        if (!$data) {
            $data = array(
                'id' => $cache_id,
                'content' => array('admin','index')
            );
            
            FileCache::set($cache_id, $data, array('life_time'=>self::$_life_time));
        }
        
        $this->assign('data', $data);
        
        $this->display('index.html');
    }
 
    /**
     * 退出登录
     */
    public function logout()
    {
        if (session_id()) {
            session('vcode',null);
            session('userInfo',null);
            session('sstate',null);
            session('ustate',null);
            session('useraccess',null);
            session_destroy();
        }

        header("location:".__APP__);
    }
}
