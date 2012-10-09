<?php
/**
 * 后台登录控制器 包括登录 状态验证 登录用户信息缓存
 * by wbq 2011-12-19
 */
class LoginControl extends BaseControl
{
    //控制器类名
    static protected $_control = 'Login';
    
    /**
     * 管理中心登录入口启用/停用控制
     */
    static private $_enable = true;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 载入登录界面
     */
    public function index()
    {
        if (!self::$_enable) return false;

        $this->assign('ecode', eCode(session('ecode')));
        $this->display('login.html');
        
        if (session_id()) session_destroy();
    }
    
    /**
     * 登录失败则跳转到登录页
     */
    static public function LoginIndex()
    {
        header("location:".__APP__."/?s=login"); exit;
    }
    
    /**
     * 获取用户名
     * @return username 登录用户名
     */
    static private function getUsername()
    {
        $username = q('username');
        
        $reg = "/^[0-9a-zA-Z][0-9a-zA-Z_.-@]{2,19}$/";
        if (preg_match($reg, $username)) {
            return $username;
        } else {
            session('ecode', 1003);
            self::LoginIndex();
        }
    }
    
    /**
     * 获取密码
     * @return password 登录密码
     */
    static private function getPassword()
    {
        $password = q('password');
        
        $reg = "/^[0-9a-zA-Z][0-9a-zA-Z_]{5,19}$/";
        if (preg_match($reg, $password)) {
            return $password;
        } else {
            session('ecode', 1003);
            self::LoginIndex();
        }
    }
    
    /**
     * 获取验证码
     */
    static private function vcodeCheck()
    {
        $vcode = q('vcode');
        
        if (session('vcode') == md5($vcode)) {
            return true;
        } else {
            session('ecode', 1004);
            self::LoginIndex();
        }
    }
    
    /**
     * 验证form的登录信息 用户名 密码 验证码
     * 如果用户信息正确 登录成功并跳转到系统首页
     * 登录失败则跳转到登录页
     */
    static public function loginCheck()
    {
        self::vcodeCheck();
        $username = self::getUsername();
        $password = self::getPassword();
        
        $where = array(
            'username' => $username
        );
        $res = T('user')->field('id,username,password,ukey,ustate')->where($where)->find();
        
        if (empty($res) || $username != $res['username'] || md5(md5($password).$res['ukey']) != $res['password']) {
            session('ecode', 1003);
            self::LoginIndex();
        }
        
        $userInfo = array(
            'id'       => $res['id'],
            'username' => $username
        );
        
		session('userInfo', $userInfo);
		session('sstate', md5(md5($username).$res['ukey']));
		session('ustate', $res['ustate']);
        
        header("location:".__APP__."/?s=index");
    }
}
