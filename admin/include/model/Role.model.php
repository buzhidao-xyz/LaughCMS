<?php
/**
 * 用户角色模型 数据处理
 * by laucen 2012-9-6
 */
class Role extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
     * 获取用户的角色信息
     * @param $userid int 用户id
	 */
	public function getRole($userid)
	{
        $return = null;

        $where = array(
            'userid' => $userid
        );
		$res = T('role_user')->field('roleid')->where($where)->select();
        
        if (!empty($res) && is_array($res)) {
            foreach ($res as $v) {
                $return[] = $v['roleid'];
            }
        }
		return $return;
	}
}