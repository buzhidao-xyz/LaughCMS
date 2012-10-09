<?php
/**
 * 验证码生成控制器 生成五位验证码
 * by wbq 2011-12-20
 */
class VCodeControl
{
    //控制器
    static protected $_control = 'VCode';
    
    //默认的验证码图片宽度 高度
    static private $_width = 60;
    static private $_height = 23;

    //验证码长度
    static private $_length = 5;

    static private $_code;

    //验证码字符选择区间
    static private $_codes = array(
        0 => '0123456789',
        1 => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        2 => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'
    );

    static private $_back_color = array(
        array('0XFF','0XFF','0XFF'),
        array('0XEE','0XEE','0XEE'),
        array('0XCA','0XE0','0XF6'),
        array('0XFC','0XF8','0XE3'),
        array('0XEB','0XF9','0XE6'),
    );

    static private $_front_color = array(
        array('0X33','0X33','0X33'),
        array('0X02','0X65','0XCF'),
        array('0X98','0X1B','0X2E'),
        array('0X12','0X87','0X22'),
        array('0X87','0X5C','0X12'),
    );

    static private $_front_pot_color = array(
        array('0X33','0X33','0X33'),
    );

    static private $_front_line_color = array(
        array('0XFF','0XFF','0XFF'),
        array('0X33','0X33','0X33'),
        array('0XC1','0XBB','0XF3'),
        array('0X02','0X65','0XCF'),
    );
    
    public function __construct()
    {
        
    }
    
    /**
     * 获取图片宽度
     */
    static private function getW()
    {
        $w = q('w');
        return preg_match("/^[1-9][0-9]{1,2}$/", $w) ? $w : self::$_width;
    }
    
    /**
     * 获取图片高度
     */
    static private function getH()
    {
        $h = q('h');
        return preg_match("/^[1-9][0-9]{1,2}$/", $h) ? $h : self::$_height;
    }

    static private function getCode()
    {
        $code = null;
        $codes = self::$_codes[0];
        $len = strlen($codes) - 1;
        
        for ($i= 0; $i< self::$_length; $i++) {
            $code .= $codes{rand(0,$len)};
        }

        self::$_code = $code;
        self::_setVcode();
        return $code;
    }
    
    /**
     * 生成验证码
     */
    static public function index()
    {
        $width = self::getW();
        $height = self::getH();
        $code = self::getCode();
    	
    	$img = imagecreate($width, $height);
    	
    	$w = imagesx($img);
    	$lpx = ($w - (strlen($code)*8.0))/2;
    	
    	$background = self::_getBackColor($img);
    	$strcolor = self::_getFrontColor($img);
    	$linecolor = self::_getFrontLineColor($img);
    	
    	imagerectangle($img,0,0,($width-1),($height-1),$linecolor);
    	
    	imageline($img,1,rand(1,($height-1)),($width-1),rand(1,($height-1)),$linecolor);
    	imageline($img,rand(1,($width-1)),1,rand(1,($width-1)),($height-1),$linecolor);
    	imageline($img,rand(1,($width-1)),1,rand(1,($width-1)),($height-1),$linecolor);
    	
    	imagestring($img,5,$lpx,3,$code,$strcolor);
    	
    	imagegif($img);
    	imagedestroy($img);
    }

    /**
     * 生成背景色
     */
    static private function _getBackColor($img=null)
    {
        $i = rand(0,count(self::$_back_color)-1);
        return imagecolorallocate($img,self::$_back_color[$i][0],self::$_back_color[$i][1],self::$_back_color[$i][2]);
    }

    /**
     * 生成前景色
     */
    static private function _getFrontColor($img=null)
    {
        $i = rand(0,count(self::$_front_color)-1);
        return imagecolorallocate($img,self::$_front_color[$i][0],self::$_front_color[$i][1],self::$_front_color[$i][2]);
    }

    /**
     * 获取噪点颜色
     */
    static private function _getFrontPotColor($img=null)
    {
        $i = rand(0,count(self::$_front_pot_color)-1);
        return imagecolorallocate($img,self::$_front_pot_color[$i][0],self::$_front_pot_color[$i][1],self::$_front_pot_color[$i][2]);
    }

    /**
     * 获取噪线颜色
     */
    static private function _getFrontLineColor($img=null)
    {
        $i = rand(0,count(self::$_front_line_color)-1);
        return imagecolorallocate($img,self::$_front_line_color[$i][0],self::$_front_line_color[$i][1],self::$_front_line_color[$i][2]);
    }

    /**
     * 调用Image库生成验证码
     */
    static public function imageCode()
    {
        import('ORG.Util.Image');
        Image::buildImageVerify();
        self::_setVcode();
    }

    /**
     * 缓存验证码
     */
    static private function _setVcode()
    {
        $code = self::$_code ? md5(self::$_code) : $_SESSION['verify'];
        session('vcode', $code);
    }
}
