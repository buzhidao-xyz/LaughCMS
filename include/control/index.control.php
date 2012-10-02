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
        'control'   => 'IndexControl',
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
                'content' => array('index front page')
            );
            
            FileCache::set($cache_id, $data, array('life_time'=>self::$_life_time));
        }
        
        assign('data', $data);
        Template::display('index.html');
    }

    static public function dbadd()
    {
        $user = array(
            "username" => "test",
        );

        $return = User::add($user);
        $ecode = eCode($return);

        $res = $ecode?$ecode:'用户插入成功!';

        assign('code', $res);
        Template::display('code.html');
    }
    
    static public function dbselect()
    {
        $user = array(
            'username' => 'test'
        );
        
        $return = User::getInfo($user);
        $ecode = eCode($return);

        $res = $ecode?$ecode:"username:".$return['username']."<br/>mail:".$return['mail'];
        
        assign('code', $res);
        Template::display('code.html');
    }

    static public function upTest()
    {
        Template::display('upload.html');
    }

    static public function upload()
    {
        $file1 = $_FILES['file1'];

        $up = new UploadHelper($file1);
        $return = $up->_upload();
        echo $return;
    }
    
    static public function memTest()
    {
        $time = Memcacheg::get('time');
        
        if (!$time) {
            $time = TIMESTAMP;
            Memcacheg::set('time', $time, 10, 1);
        }
        
        echo $time;
    }
    
    static public function getAjax()
    {
        $data = self::$_class_name;
        
        $return = array(
            'status' => 1,
            'data'   => $data
        );
        
        return $return;
    }

    static public function motest()
    {
        
    }
}
