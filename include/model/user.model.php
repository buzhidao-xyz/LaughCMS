<?php
/**
 * 用户模型类 包括用户信息的增删改查
 * By wbq 2011-12-15
 */
class User extends Model
{
    /**
     * 定义类名
     */
    static private $_class_name = 'User Model';
    
    /**
     * 定义返回值
     */
    static private $_return = 1;
    
    public function __construct()
    {
        
    }
    
    /**
     * 增加新用户
     * @param $user array(username,password,name,mail,ukey,regtime)
     * 用户名，密码，昵称，邮箱，加密字符串，注册时间
     * @param $mod 数据插入模式 单条数据赋值0 多条数据请赋值1 默认值是0
     * @return ecode
     */
    static public function add($user, $mod=0)
    {
        $where = array(
            array('username', $user['username'])
        );
        $res = Table('user')->select('id')->where($where)->find();

        if (!empty($res)) {
            $return = 1001;
        } else {
            $res = !$mod?Table('user')->insert($user):Table('user')->insert($user,1);
            
            if ($res) {
                $return = self::$_return;
            } else {
                $return = 1002;
            }
        }
        
        return $return;
    }
    
    /**
     * 更新用户信息
     * @param uid 账户id
     */
    static public function update($data)
    {
        $where = array(
            array('username', $data['username'])
        );
        $data = array_diff_assoc($data, $where);
        $res = Table('user')->update($data)->where($where)->exec();

        if ($res) {
            $return = self::$_return;
        } else {
            $return = 1005;
        }
    }
    
    /**
     * 删除用户信息 将账户的status字段改为0
     * @param id/username 账户id/用户名
     */
    static public function delete($user)
    {
        
    }
    
    /**
     * 查询用户信息
     * @param $field mixed 条件字段/值 默认为null
     */
    static public function getInfo($user=null)
    {
        $res = Table("user")->select("username,mail")->where($user)->find();

        if (empty($res)) {
            return 1006;
        } else {
            return $res;
        }
    }
}
