<?php
/**
 * 角色控制器
 * by buzhidao 2012-11-14
 */
class RoleControl extends CommonControl
{
	public function __construct()
	{
		parent::__construct();
	}

	//新建角色
	public function newRole()
	{

	}

	//管理角色
	public function manageRole()
	{
		
	}

	//获取管理员id/角色ID
	public function _getID()
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

	//修改管理员角色权限
	public function roleAdmin()
	{
		$id = $this->_getID();
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