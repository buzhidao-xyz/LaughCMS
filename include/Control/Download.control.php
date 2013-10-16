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

	//栏目封面页
	public function index()
	{
		$this->display($this->_Column['template_index']);
	}

	//栏目列表页
	public function lists()
	{
		$ArchiveList = $this->getAllArchive();

		$this->assign("ArchiveList", $ArchiveList['data']);
		$this->assign("page", getPage($ArchiveList['total'],$this->_pagesize));
		$this->display($this->_Column['template_list']);
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