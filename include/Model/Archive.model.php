<?php
/**
 * 文档模型
 * by wbq 2011-12-13
 * edit by buzhidao 2012-12-13
 * 文档的基本增删改查操作
 */
class Archive extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取文档列表
	 * @param $archiveid mixed 文档id 单一id或数组
	 * @param $start int 分页开始记录数
	 * @param $length int 每页记录数
	 * @param $where array() 条件数组
	 */
	public function getArchive($archiveid=null,$start=0,$length=0,$where=array(),$state=1)
	{
		$where = is_array($where) ? $where : array();
		$where['state'] = $state;
		if ($archiveid) $where['a.id'] = is_array($archiveid) ? array("in", $archiveid) : $archiveid;

		$total = T("archive")->where($where)->count();
		$obj = T("archive")->where($where);
		if ($length) $obj = $obj->limit($start,$length);
		$data = $obj->order("publishtime","desc")->select();
		$data = $this->dealArchive($data);

		return array('total'=>$total, 'data'=>$data);
	}

	/**
	 * 获取某个栏目下面的文档列表
	 * @param $columnid mixed 栏目id
	 */
	public function getArchiveListByColumnID($columnid=null)
	{
		if (empty($columnid)) return false;

		$where = array();
		$where['columnid'] = is_array($columnid) ? array('in',$columnid) : $columnid;
		$articleList = $this->getArchive(null,0,0,$where);

		return $ArchiveList['data'];
	}

	/**
	 * 格式化文档列表
	 * @param $data array 文档数组列表
	 */
	public function dealArchive($data=array())
	{
		if (!is_array($data) || empty($data)) return array();

		//加入文档号
		$i = 1;
		foreach ($data as $k=>$d) {
			$data[$k]['AutoIndex'] = $i;
			$i++;
		}

		return $data;
	}

	/**
	 * 获取某篇文档的前一篇文档
	 * @param $archiveid int 文章id
	 */
	public function getPrevArchive($columnid=null,$archiveid=null)
	{
		if (empty($columnid)||!$archiveid) return false;

		$columnids = M("Column")->getChildrenColumnID($columnid);

		$where = array("state"=>1);
		$where['columnid'] = array("in", $columnids);
		$where['id'] = array("lt",$archiveid);
		return T("archive")->where($where)->order("id","desc")->find();
	}

	/**
	 * 获取某篇文档的后一篇文档
	 * @param $archiveid int 文章id
	 */
	public function getNextArchive($columnid=null,$archiveid=null)
	{
		if (empty($columnid)||!$archiveid) return false;

		$columnids = M("Column")->getChildrenColumnID($columnid);

		$where = array("state"=>1);
		$where['columnid'] = array("in", $columnids);
		$where['id'] = array("gt",$archiveid);
		return T("archive")->where($where)->order("id","asc")->find();
	}

	/**
	 * 获取文档图片
	 * @param $archiveid int 文档ID
	 */
	public function getArchiveImages($archiveid=null,$start=0,$length=0)
	{
		if (!$archiveid) return false;

		$obj = T("images")->where(array("archiveid"=>$archiveid));
		if ($length) $obj = $obj->limit($start,$length);
		return $obj->order("id","asc")->select();
	}

	/**
	 * 获取文档内容详情
	 */
	public function getArchiveInfo($columnid=null,$archiveid=null,$where=array())
	{
		
	}
}