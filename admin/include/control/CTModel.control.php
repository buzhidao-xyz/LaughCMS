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

    //获取模型名称
    public function getName()
    {
        return q("name");
    }

    //获取模型描述
    public function getDescription()
    {
        return q("description");
    }

    //获取模型表名
    public function getTable()
    {
        return q("table");
    }

    //获取模型控制器名
    public function getControl()
    {
        return q("control");
    }

    //获取前台可调用字段
    public function getUseFields()
    {
        return q("usefields");
    }

    //单页模型
    public function singlePage()
    {
        $this->display("ColumnModel/singlePage.html");
    }

    //内容模型管理
    public function ColumnModel()
    {
        $ColumnModelList = M("CTModel")->ColumnModelList();

        $this->assign("total", $ColumnModelList['total']);
        $this->assign("dataList", $ColumnModelList['data']);

        $this->display("ColumnModel/index.html");
    }

    //添加内容模型
    public function addColumnModel()
    {
        $this->assign("accessStatus",1);
        $this->display("ColumnModel/newModel.html");
    }

    //保存新内容模型
    public function saveColumnModel()
    {
        $name = $this->getName();
        $description = $this->getDescription();
        $table = $this->getTable();
        $control = $this->getControl();
        $usefields = $this->getUseFields();

        $data = array(
            'name' => $name,
            'description' => $description,
            'table' => $table,
            'control' => $control,
            'usefields' => $usefields,
            'createtime' => TIMESTAMP
        );

        $return = M("CTModel")->saveColumnModel($data);
        if ($return) {
            $this->showMessage("新增内容模型成功！",1);
        } else {
            $this->showMessage("新增内容模型失败！",0);
        }
    }

    //模型字段
    public function ModelField()
    {
        $this->display("ColumnModel/ModelField.html");
    }

    //更新内容模型
    public function UpdateModel()
    {
        $this->display("ColumnModel/ModelField.html");
    }
}