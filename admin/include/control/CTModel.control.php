<?php
/**
 * 内容模型控制器
 * by wbq 2012-9-6
 */
class CTModelControl extends CommonControl
{
    //控制器
    static protected $_control = 'CTModel';

    private $_CTModel;

    public function __construct()
    {
        parent::__construct();

        if (!$this->_CTModel) $this->_CTModel = M('CTModel');
    }

    //主入口
    public function index(){}

    //单页模型
    public function singlePage()
    {

    }

    //内容模型
    public function ColumnModel()
    {

    }
}