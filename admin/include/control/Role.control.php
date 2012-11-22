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

		return $id;
	}

	//获取角色id
	private function _getRoleID()
	{
		$roleid = q('roleid');

		return $roleid;
	}

	//获取状态
	private function _getStatus()
	{
		$status = q('status');
		if ((int)$status!==0 && (int)$status!==1) $this->ajaxReturn(1,'账户状态错误！');
		return $status;
	}

	//新建角色
	public function newRole()
	{
		$id = $this->_getID();
		$roleInfo = $id ? $this->getRole($id) : array();
		$roleInfo = empty($roleInfo) ? array('id'=>'','name'=>'','remark'=>'','status'=>1) : $roleInfo['data'];
		$this->assign('roleInfo', $roleInfo);

		$nodeTree = M('Node')->makeNodeTree();
		$this->assign('nodeTree',$nodeTree);
		$this->display("Role/newrole.html");
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

	/**
	 * 添加、修改角色、如果roleid为空为添加角色
	 */
	public function roleModify()
	{
		
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