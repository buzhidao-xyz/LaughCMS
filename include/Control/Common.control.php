<?php
/**
 * 通用控制器基类
 * by wbq 2012-3-27
 */
class CommonControl extends BaseControl
{
	//控制器名
    protected $_control = "common";

    //初始化构造函数
    public function __construct()
    {
        parent::__construct();

        //导航栏目列表
        $this->ColumnList();

        $this->assign("control", $this->_control);
    }

    //获取顶部导航栏目列表
    public function ColumnList()
    {
    	$ColumnList = M("Column")->getColumn();
    	dump($ColumnList);exit;
    	$this->assign("ColumnList", $ColumnList);
    }
}
