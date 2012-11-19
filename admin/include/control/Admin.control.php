<?php
/**
 * 角色控制器
 * by buzhidao 2012-11-15
 */
class AdminControl extends CommonControl
{
	private $_status = array(
		0 => '禁用',
		1 => '启用'
	);

	public function __construct()
	{
		parent::__construct();
	}

	//主入口
	public function index(){}

	//获取id
	private function _getID()
	{
		$id = q('id');
		if (!FilterHelper::C_int($id)) $this->ajaxReturn(1,'ID错误！');
		return $id;
	}

	//个人信息
	public function profile()
	{
		$this->display('Admin/profile.html');
	}

	//修改密码
	public function upPassword()
	{
		$id = $this->userInfo['id'];
		$ukey = $this->userInfo['ukey'];
		$password0 = isset($_REQUEST['password0']) ? $_REQUEST['password0'] : '';
		if (!Check::__Check('adminPwd',$password0)) $this->ajaxReturn(1,'原始密码错误！');
		$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
		if (!Check::__Check('adminPwd',$password)) $this->ajaxReturn(1,'新密码错误！');
		$password1 = isset($_REQUEST['password1']) ? $_REQUEST['password1'] : '';
		if ($password != $password1) $this->ajaxReturn(1,'两次新密码不一样！');

		$adminInfo = M('Admin')->getAdmin($id);
		if (M('Admin')->password_encrypt($password0,$ukey) != $adminInfo['data'][0]['password']) $this->ajaxReturn(1,'原始密码错误！');

		$data = array(
			'password' => M('Admin')->password_encrypt($password,$ukey)
		);
		$return = M('Admin')->upAdmin($id,$data);
		if ($return) {
			$this->ajaxReturn(0,'密码修改成功！');
		} else {
			$this->ajaxReturn(1,'密码修改失败！');
		}
	}

	//新管理员
	public function newAdmin()
	{
		$this->display('Admin/add.html');
	}

	//管理员列表
	public function adminList()
	{
		list($start,$length) = $this->getPages();
		$adminList = M('Admin')->getAdmin(null,$start,$length);
		if ($adminList['total']) {
			foreach ($adminList['data'] as $k => $v) {
				$roleid = M('Role')->getAdminRole($v['id']);
				$adminList['data'][$k]['roleid'] = implode(',',$roleid);
				$rolename = !empty($roleid) ? M('Role')->getRole($roleid) : array();
				if (!empty($roleid)) {
					$rolenames = array();
					foreach ($rolename['data'] as $k1=>$v1) {
						$rolenames[] = $v1['name'];
					}
				} else $rolenames = array();
				$adminList['data'][$k]['rolename'] = implode(' ',$rolenames);
				$adminList['data'][$k]['_status'] = $this->_status[$v['status']];
			}
		}

		$this->assign('total',$adminList['total']);
		$this->assign('adminList',$adminList['data']);
		$this->assign("page", getPage($adminList['total'],$this->_pagesize));

		$roleList = M('Role')->getRole();
		$this->assign('roleList', $roleList['data']);

		$this->assign('super_admin',session('super_admin'));
		$this->display('Admin/adminList.html');
	}

	//更改状态
	public function upAdminStatus()
	{
		$id = $this->_getID();
		$status = isset($_REQUEST['status']) ? $_REQUEST['status'] : 0;
		if (in_array($id, session('super_admin'))) $this->ajaxReturn(1,'禁止操作！');

		$return = M('Admin')->upAdmin($id,array('status'=>$status));
		if ($return) {
			$this->ajaxReturn(0,'管理员已'.$this->_status[$status].'！');
		} else {
			$this->ajaxReturn(1,'管理员已'.$this->_status[$status].'！');
		}
	}

	//删除管理员
	public function delteAdmin()
	{
		$id = $this->_getID();
		if (in_array($id, session('super_admin'))) $this->ajaxReturn(1,'禁止操作！');

		$return = M('Admin')->deleteAdmin($id);
		if ($return) {
			$this->ajaxReturn(0,'管理员删除成功！');
		} else {
			$this->ajaxReturn(1,'管理员删除失败！');
		}
	}
}