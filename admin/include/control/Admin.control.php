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

	//获取管理员用户名
	private function _getUsername()
	{
		$username = q('username');
		if (!$username) $this->ajaxReturn(1,'请输入账户名！');
		return $username;
	}

	//获取状态
	private function _getStatus()
	{
		$status = q('status');
		if ((int)$status!==0 && (int)$status!==1) $this->ajaxReturn(1,'账户状态错误！');
		return $status;
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

	//保存管理员信息
	public function saveAdmin()
	{
		$username = $this->_getUsername();
		$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
		if (!Check::__Check('adminPwd',$password)) $this->ajaxReturn(1,'密码错误！');
		$password1 = isset($_REQUEST['password1']) ? $_REQUEST['password1'] : '';
		if ($password != $password1) $this->ajaxReturn(1,'两次密码不一样！');
		$status = $this->_getStatus();

		$ukey = getRandStrs();
		$data = array(
			'username' => $username,
			'password' => M('Admin')->password_encrypt($password,$ukey),
			'ukey'     => $ukey,
			'createtime' => TIMESTAMP,
			'status'   => $status,
			'ustate'   => md5(md5($username).$ukey),
			'lastlogintime' => TIMESTAMP,
			'lastloginip'   => ip2longs(getIp()),
			'logincount'    => 0
		);
		$return = M('Admin')->saveAdmin($data);
		if ($return) {
			$this->ajaxReturn(0,'管理员添加成功！');
		} else {
			$this->ajaxReturn(1,'管理员添加失败！');
		}
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
		$status = $this->_getStatus();
		if (in_array($id, session('super_admin'))) $this->ajaxReturn(1,'禁止操作！');

		$return = M('Admin')->upAdmin($id,array('status'=>$status));
		if ($return) {
			$this->ajaxReturn(0,'管理员已'.$this->_status[$status].'！');
		} else {
			$this->ajaxReturn(1,'管理员已'.$this->_status[$status].'！');
		}
	}

	//重置密码
	public function resetPassword()
	{
		$id = $this->_getID();
		$randString = getRandStrs(5,1);

		$adminInfo = M('Admin')->getAdmin($id);
		if (!$adminInfo['total']) $this->ajaxReturn(1,'非法管理员！');

		$return = M('Admin')->upAdmin($id,array('password'=>M('Admin')->password_encrypt($randString,$adminInfo['data'][0]['ukey'])));
		if ($return) {
			$this->ajaxReturn(0,'重置成功 新密码: '.$randString);
		} else {
			$this->ajaxReturn(1,'重置失败');
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