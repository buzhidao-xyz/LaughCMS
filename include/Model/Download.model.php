<?php
/**
 * 下载模型
 * by buzhidao 2013-04-10
 * edit by buzhidao 2013-04-10
 */
class Download extends Archive
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取下载文件
	 */
	public function getDownload($archiveid=null,$start=0,$length=0,$where=array(),$state=1)
	{
        $where = is_array($where) ? $where : array();
		$where['state'] = $state;
		if ($archiveid) $where['a.id'] = is_array($archiveid) ? array("in", $archiveid) : $archiveid;

		$obj = T("archive")->join(' '.TBF.'attachment as b on a.id=b.archiveid ')->field("a.*,b.id as attachmentid,b.filepath,b.filename,b.savename,b.filesize,b.filetype,b.downloadnum,b.createtime")->where($where);
		if ($length) $obj = $obj->limit($start,$length);
		$data = $obj->order("publishtime","desc")->select();
		$data = $this->dealArchive($data);

		return array('total'=>count($data), 'data'=>$data);
	}
}