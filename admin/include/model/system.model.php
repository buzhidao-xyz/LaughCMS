<?php
/**
 * 系统控制数据模型
 * by laucen 2012-5-17
 */
class System extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/*
	 * 获取角色信息
	 * @param $roleid int 角色ID 默认为null 取全部角色信息
	 * @param $type int 获取角色信息类型 0当前id角色信息 1当前角色的下级角色信息
	 */
	public function getRole($roleid=0,$type=1)
	{
		$return = null;
		$where = array();

		if (!$type) {
			$where = array(
				array('a.id', $roleid)
			);
		} else {
			$where = array(
				array('a.pid', $roleid)
			);
		}
		$where[] = array('a.status', 1);

		$on = array(
			array('a.pid', 'b.id')
		);

		$data = Table('role')->join('role')->select('a.*,b.name as pname')->on($on)->where($where)->find(1);
		foreach ($data as $k=>$v) {
			$data[$k] = $this->parseMap($v,array('role'),false);
		}

		$return = $this->csort($data);

		return $return;
	}

	/**
	 * 返回数据处理
	 */
	public function csort($data,$key=null)
	{
		$return = array();

		if (is_array($data) && !empty($data)) {
			$n = 1;
			foreach ($data as $k => $v) {
				$v['nindex'] = $n;
				if (array_key_exists('createtime', $v)) $v['createtime'] = getDateTime('s',$v['createtime']);
				if (array_key_exists('remark', $v)) $v['remark'] = msbstr($v['remark'],0,25);
				if (array_key_exists('pname', $v)) $v['pname'] = $v['pname'] ? $v['pname'] : '无';

				$key = isset($v[$key]) ? $v[$key] : $k;
				$return[$key] = $v;
				$n++;
			}
			unset($n);
		}
		//dump($return);exit;

		return $return;
	}
}