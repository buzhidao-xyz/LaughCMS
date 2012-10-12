<?php
/**
 * filter类
 * by laucen 2011-11-16
 */
 class FilterHelper
 {
    //控制器
    protected $_helper = "Filter";

    public function __construct()
    {
        
    }

    /**
     * 检测是否数字
     * @param $str int 字符
     * @param $convert bool 是否转义 true转义 false不转义 默认false
     */
    static public function C_Numeric($str,$convert=false)
    {
    	$return = null;
    	$return = is_numeric($str);

    	return $return;
    }

    /**
     * 将html字符转成实体
     * @param $string string 字符串
     * @param $flag string 标志
     */
    static public function F_htmlentities($string, $flag=ENT_QUOTES)
    {
        return htmlentities($string, $flag);
    }
 }