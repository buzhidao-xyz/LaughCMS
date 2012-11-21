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
	public function rolemodify()
	{
		$id = $this->_getID();
		if(trim($_REQUEST['action'])=='gettree'){//获取完整的权限树
			if(empty($role_id)) exit(json_encode($this->power->formatTreeForRole($this->powermod->get(0,true,false),true)));//空树
			exit(json_encode($this->power->formatTreeForRole($this->powerrole->getModel($role_id),true)));
		}
		if($_POST)
		{
			$powerTree 	= 	$_REQUEST['role'];
			$role_name 	=	$_REQUEST['rolename'];
			$role_desc	=	$_REQUEST['desc'];
			$state		=	$_REQUEST['status'];
			
			if(empty($role_name)) $this->ierror(1,'用户名不能为空');
			
			if(!in_array($state,array(0,1))) $this->ierror(1,'用户状态错误');
			if(!is_array($powerTree)) $this->ierror(1,'权限树错误');
			
			$roleArray = array(	
					'role_name'		=>	$role_name,
					'role_desc'		=>	$role_desc,
					'state'			=>	$state,
					'create_time'	=>	time(),
				);
			if(empty($role_id)) {
				$role_id = $this->powerrole->add($roleArray);
				$is_add = true;
			} else {
				$this->powerrole->edit($role_id,$roleArray);
				$del = $this->powerrole->delModel($role_id); //删除现有模块
				if($del===false) $this->ierror(1,'权限操作错误');
			}
			
			if(empty($role_id)) $this->ierror(1,'数据库操作失败');
			
			$modelAddLog = '';				//添加权限的错误日志
			foreach($powerTree as $v)
			{
				if($v['status']==0||!is_numeric($v['status'])) continue;
				
				$modelArray = array(	'role_id'	=>$role_id,
										'model_id'	=>$v['id'],
										'model_priv'=>$v['status'],
										'timestamp'	=>time()
									);
				$modelId = $this->powerrole->addModel($modelArray);
				if(empty($modelId)) $modelAddLog .= ','.$v['name'];
			}
			if(!empty($modelAddLog)) $this->ierror(1,'角色创建成功。权限：'.trim($modelAddLog,',').'添加失败');
			
			if ($is_add){
				$this->writeLog('添加角色：'.$role_name);
				$this->ierror(0,'添加成功');
			} else {
				$this->writeLog('修改角色：'.$role_name);
				$this->ierror(0,'修改成功');
			}
 			
		}
		$start = ($this->p-1)*$this->pnum;
		$total = $this->powerrole->get(0,0,0,1);
		$this->assign('total',$total);
		$this->assign('allRole',$this->powerrole->get(0,$start,$this->pnum));
		$this->assign('page',getPage($total,$this->pnum));
		$this->display('role:rolemodify');
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