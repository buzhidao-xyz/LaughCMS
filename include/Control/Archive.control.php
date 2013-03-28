<?php
/**
 * 文档控制器
 * by wbq 2013-03-28
 * 处理逻辑数据 执行具体的功能操作
 */
class ArchiveControl extends CommonControl
{
	//控制器名
    protected $_control = 'Archive';

	public function __construct()
	{
		parent::__construct();
	}

	//获取文档ID
	public function _getArchiveID()
	{
		$archiveid = q("archiveid");
		return $archiveid;
	}
}