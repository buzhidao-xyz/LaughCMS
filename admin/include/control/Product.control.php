<?php
/**
 * 产品控制器
 */
class ProductControl extends ArchiveControl
{
	//控制器名
	static protected $_Control = "Product";

	public function __construct()
	{
		parent::__construct();
	}

	//获取产品ID
	public function _getProductID()
	{
		$productid = q("productid");
		return $productid;
	}

	//获取型号
	public function _getModel()
	{
		$model = q("model");
		return $model;
	}

	//获取品牌
	public function _getBrand()
	{
		$brand = q("brand");
		return $brand;
	}

	//获取颜色
	public function _getColor()
	{
		$color = q("color");
		return $color;
	}

	//获取材质
	public function _getMaterial()
	{
		$material = q("material");
		return $material;
	}

	//获取尺寸
	public function _getSize()
	{
		$size = q("size");
		return $size;
	}

	//获取价格
	public function _getPrice()
	{
		$price = q("price");
		return $price;
	}

	//获取数量
	public function _getTotal()
	{
		$total = q("total");
		return $total;
	}

	//主入口
	public function index()
	{
		$columnid = $this->_getColumnID();

		$columnids = array();
		if ($columnid) $columnids = array_merge(M("Column")->getSubColumnID($columnid),array($columnid));

		list($start,$length) = $this->getPages();
        $articleList = M("Product")->getProduct(null,$start,$length,1,$columnids,self::$_Control);
        $this->assign("total", $articleList['total']);
        $this->assign("dataList", $articleList['data']);

        $this->assign("page", getPage($articleList['total'],$this->_pagesize));
		$this->display("Product/index.html");
	}

	//添加新产品
	public function add()
	{
		$this->assign("accessStatus",1);

		$this->assign("userInfo",$this->userInfo);
		$this->assign("columnTree", D("Column")->getColumnTree(self::$_Control));

		$this->display("Product/add.html");
	}

	//保存产品
	public function save()
	{
		$data = $this->dealArchiveSubmit();
		$archiveid = M("Archive")->saveArchive($data['title'],$data['tag'],$data['source'],$data['author'],$data['columnid'],$data['status'],$data['seotitle'],$data['keyword'],$data['description'],$data['image'],$data['publishtime']);
		
		if ($archiveid) {
			$model = $this->_getModel();
			$brand = $this->_getBrand();
			$color = $this->_getColor();
			$material = $this->_getMaterial();
			$size = $this->_getSize();
			$price = $this->_getPrice();
			$total = $this->_getTotal();
			$instruction = $this->_getContent();

			$productid = M('Product')->saveProduct($archiveid,$model,$brand,$color,$material,$size,$price,$total,$instruction);
			if ($productid) {
				$NextOperation = array(
					array('name'=>'查看修改', 'link'=>__APP__.'/index.php?s=Product/edit&archiveid='.$archiveid)
				);
				$this->assign("NextOperation", $NextOperation);
				$this->display("Common/success.html");
			} else {
				$this->display("Common/error.html");
			}
		} else {
			$this->display("Common/error.html");
		}
	}

	//产品回收站
	public function recover()
	{
		$this->display("Product/recover.html");
	}
}