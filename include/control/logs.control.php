<?php
/**
 * 日志(log)处理
 * by wbq 2012-1-31
 */
class LogsControl extends CommonControl
{
    /**
     * 控制器名
     */
    static private $_class_name = 'Logs Control';
    
    /**
     * 日志文件列表
     */
    static private $_file_list = array();
    
    /**
     * log内容
     */
    static private $_log_content = array();
    
    /**
     * log文件
     */
    static private $_log_file = null;
    
    public function __construct()
    {
        
    }
    
    /**
     * Log控制器主入口 
     */
    static public function index()
    {   
        list($u,$p) = self::_get();
        Logs::checkLog($u,$p);
        
        $f = g('f');
        $log_file = $f ? $f : self::$_log_file;
        
        ob_flush();
        $log_content = Logs::_getLog($f);
        $log_content = $log_content ? $log_content : self::$_log_content;
        
        assign("logfile", $log_file);
        assign('logcontent', $log_content);
        
        Template::display('logs.index.html');
    }
    
    /**
     * 备份日志文件
     */
    static public function backup()
    {
        Logs::_backup();
        header("location:?r=logs");
    }
    
    /**
     * 清空当前的日志记录
     */
    static public function clear()
    {
        Logs::_clear();
        header("location:?r=logs");
    }
    
    /**
     * 查看备份的日志文件列表
     */
    static public function look()
    {
        $_file_list = Logs::_list();
        
        assign("logfile", 1);
        assign("filelist", $_file_list);
        Template::display('logs.list.html');
    }
    
    /**
     * 获取客户端输入的用户名 密码
     */
    static private function _get()
    {
        $username = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';
        $password = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
        
        return array($username, $password);
    }
}
