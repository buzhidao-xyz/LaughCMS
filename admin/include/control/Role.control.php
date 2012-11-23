<?php
/**
 * 角色控制器
 * by buzhidao 2012-11-14
 */
class RoleControl extends CommonControl
{
	private $_status = array(
		0 => '禁用',
		1 => '启用'
	);

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){}

	//获取管理员id/角色ID
	private function _getID()
	{
		$id = q('id');
		if ($id && !FilterHelper::C_int($id)) $this->ajaxReturn(1,'角色ID错误！');

		return $id;
	}

	//获取角色id
	private function _getRoleID()
	{
		$roleid = q('roleid');
		if ((int)$roleid !== 0 || !FilterHelper::C_int($roleid)) $this->ajaxReturn(1,'角色ID错误！');

		return $roleid;
	}

	//获取角色名称
	private function _getName()
	{
		return q('name');
	}

	//获取描述
	private function _getRemark()
	{
		return q('remark');
	}

	//获取状态
	private function _getStatus()
	{
		$status = q('status');
		if ((int)$status!==0 && (int)$status!==1) $this->ajaxReturn(1,'账户状态错误！');
		return $status;
	}

	//获取节点
	private function _getNode()
	{
		$node = q('node');

		return $node;
	}

	//新建角色
	public function newRole()
	{
		$id = $this->_getID();
		$roleInfo = $id ? M('Role')->getRole($id) : array();
		$roleInfo = empty($roleInfo) ? array('id'=>0,'name'=>'','remark'=>'','status'=>1) : $roleInfo['data'][0];
		$roleInfo['node'] = $id ? M('Node')->getRoleNode(array($roleInfo['id']),0) : array();
		$this->assign('roleInfo', $roleInfo);

		$nodeTree = M('Node')->makeNodeTree();
		$this->assign('nodeTree',$nodeTree);
		$this->display("Role/newrole.html");
	}

	/**
	 * 添加、修改角色、如果roleid为空为添加角色
	 */
	public function saveRole()
	{
		$id = $this->_getID();
		$roleInfo = $id ? M('Role')->getRole($id) : array();
		$roleInfo = empty($roleInfo) ? array('createtime'=>'') : $roleInfo['data'][0];

		$name = $this->_getName();
		$remark = $this->_getRemark();
		$status = $this->_getStatus();
		$node = $this->_getNode();

		$info = $id ? '编辑' : '新增';
		$data = array(
			'name'   => $this->_getName(),
			'remark' => $this->_getRemark(),
			'status' => $this->_getStatus(),
			'createtime' => $roleInfo['createtime'] ? $roleInfo['createtime'] : TIMESTAMP,
			'updatetime' => TIMESTAMP
		);
		$return = $id ? M('Role')->upRole($id,$data) : M('Role')->saveRole($data);
		if ($return) {
			$id = $id ? $id : $return;
			$data = array();
			foreach ($node as $k=>$v) {
				$data[] = array('roleid'=>$id,'nodeid'=>$v);
			}
			$return = M('Node')->upRoleNode($id,$data);
			if ($return) {
				$this->ajaxReturn(0,$info.'角色成功！');
			} else {
				$this->ajaxReturn(1,$info.'角色失败！');
			}
		} else {
			$this->ajaxReturn(1,$info.'角色失败！');
		}
	}

	//管理角色
	public function manageRole()
	{
		list($start, $length) = $this->getPages();

		$roleList = M('Role')->getRole(null,$start,$length);
		$this->assign('roleList', $roleList['data']);
		$this->assign('total', $roleList['total']);

		$this->assign("page", getPage($roleList['total'],$this->_pagesize));
		$this->display("Role/manage.html");
	}

	//删除角色
	public function deleteRole()
	{
		$id = $this->_getID();
	}

	//修改角色状态
	public function upRoleStatus()
	{
		$id = $this->_getID();
		$status = $this->_getStatus();

		$return = M('Role')->upRole($id,array('status'=>$status));
		if ($return) {
			$this->ajaxReturn(0,'角色已'.$this->_status[$status].'！');
		} else {
			$this->ajaxReturn(1,'角色已'.$this->_status[$status].'！');
		}
	}

	//修改管理员角色权限
	public function roleAdmin()
	{
		$id = $this->_getID();
		if (in_array($id, session('super_admin'))) $this->ajaxReturn(1,'禁止操作！');
		$roleid = $this->_getRoleID();
		$roleid = explode(',', $roleid);

		$return = M('Role')->upAdminRole($id,$roleid);
		if ($return) {
			$this->ajaxReturn(0,'管理员角色权限修改成功！');
		} else {
			$this->ajaxReturn(1,'管理员角色权限修改失败！');
		}
	}
}