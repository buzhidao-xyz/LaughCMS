<?php
/**
 * 用户信息控制器
 * by wbq 2011-11-09
 */
class UserControl extends CommonControl
{
    //定义类名
    static private $_class_name = 'User Control';
    
    //定义缓存有效时间(秒)
    static public $_life_time = 10;
    
    //定义查询字符串
    static private $_query;
    
    public function __construct($query)
    {
		parent::__construct();
        self::$_query = $query;
    }
    
    /**
     * index页
     */
    static public function index()
    {
        $cache_id = self::$_query['control'].'_'.self::$_query['function'];
        $data = FileCache::get($cache_id);
        
        if (!$data) {
            $data = array(
                'id' => $cache_id,
                'content' => array('1','2')
            );
            
            FileCache::set($cache_id, $data, array('life_time'=>self::$_life_time));
        }
        
        assign('data', $data);
        
        Template::display('user/index.html');
    }
    
    /**
     * 菜单页
     */
    static public function menu()
    {
        Template::display('user/menu.html');
    }
    
    /**
     * 用户信息搜索页
     */
    static public function search()
    {
        Template::display('user/search.html');
    }
}
