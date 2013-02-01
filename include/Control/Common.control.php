<?php
/**
 * 通用控制器基类
 * by wbq 2012-3-27
 */
class CommonControl extends BaseControl
{
	//控制器名
    protected $_control = "common";

    public function __construct()
    {
        parent::__construct();

        $this->assign("control", $this->_control);
    }
}
