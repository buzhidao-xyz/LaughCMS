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
    
    //定义调用数组
    static private $_query = array(
        'control'   => 'UserControl',
        'function'  => 'index',
        'string'    => ''
    );
    
    public function __construct($query)
    {
        self::$_query = $query;
    }
    
    static public function index()
    {
        $cache_id = self::$_query['control'].' '.self::$_query['function'];
        $data = FileCache::get($cache_id);
        
        if (!$data) {
            $data = array(
                'id' => $cache_id,
                'content' => array('user','index')
            );
            
            FileCache::set($cache_id, $data, array('life_time'=>self::$_life_time));
        }
        
        assign('data', $data);
        
        Template::display('user.index.html');
    }
    
    static public function userInfo()
    {
        $cache_id = self::$_query['control'].'_'.self::$_query['function'];
        $data = FileCache::get($cache_id);
        
        if (!$data) {
            $data = array(
                'id' => $cache_id,
                'content' => array('username','password')
            );
            
            FileCache::set($cache_id, $data, array('life_time'=>self::$_life_time));
        }
        
        assign('data', $data);
        
        Template::display('user.info.html');
    }
}
