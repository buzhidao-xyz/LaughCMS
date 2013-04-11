<?php
/**
 * 下载模型控制器
 * by buzhidao 2013-02-01
 * 处理逻辑数据 执行具体的功能操作
 */
class DownloadControl extends ArchiveControl
{
	//控制器名
    protected $_control = 'Download';

	public function __construct()
	{
		parent::__construct();
	}

	//主入口
	public function index()
	{
		list($start,$length) = $this->getPages();
		$ArchiveList = $this->getAllDownload();

		$this->assign("ArchiveList", $ArchiveList['data']);
		$this->assign("page", getPage($ArchiveList['total'],$this->_pagesize));
		$this->display("Download/index.html");
	}

	/**
	 * 获取下载文件
	 */
	public function getAllDownload($columnid=null,$num=0)
	{
        $columnid = $columnid ? $columnid : $this->_columnid;
        $columnids = M("Column")->getChildrenColumnID($columnid);

        $where = empty($columnids) ? array() : array("columnid"=>array("in",$columnids));
        return M("Download")->getDownload(null,0,$num,$where,1);
	}
}