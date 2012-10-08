<?php
/**
 * orm字段映射表 相同的数据表字段最好用相同的映射key值
 */
$orm = array (
    'article_index'     => array(
        'id'            => 'id',
        'title'         => 'title',
        'link'          => 'link',
        'sindex'        => 'sindex'
    ),
    'group'             => array(
	    'id'            => 'id',
        'title'         => 'title',
        'control'       => 'control',
        'createtime'    => 'createtime',
        'updatetime'    => 'updatetime',
	    'sort'          => 'sort',
	    'isshow'        => 'isshow'
    ),
    'node'              => array(
        'id'            => 'id',
        'title'         => 'title',
        'remark'        => 'remark',
        'control'       => 'control',
        'action'        => 'action',
        'sort'          => 'sort',
        'pid'           => 'pid',
        'level'         => 'level',
        'groupid'       => 'groupid',
    ),
    'role'              => array(
	    'id'            => 'id',
        'name'          => 'name',
	    'pid'           => 'pid',
        'status'        => 'status',
        'remark'        => 'remark',
        'createtime'    => 'createtime',
        'updatetime'    => 'updatetime',
        'pname'         => 'pname'
    ),
    'role_access'       => array(
    	'roleid'        => 'roleid',
    	'nodeid'        => 'nodeid',
    	'groupid'       => 'groupid',
    ),
    'role_user'         => array(
    	'roleid'        => 'roleid',
    	'userid'        => 'userid'
    ),
    'system'            => array(
        'id'            => 'id',
        'host'          => 'host',
        'name'          => 'name',
        'keywords'      => 'keywords',
        'style'         => 'style',
        'admin_style'   => 'admin_style',
        'admin_dir'     => 'admin_dir'
    ),
    'user'              => array(
        'id'            => 'id',
        'username'      => 'username',
        'password'      => 'password',
	    'nickname'      => 'nickname',
        'email'         => 'email',
        'remark'        => 'remark',
        'ukey'          => 'ukey',
        'createtime'    => 'createtime',
        'status'        => 'status',
        'ustate'        => 'ustate',
        'permission'    => 'permission',
        'lastlogintime' => 'lastlogintime',
        'lastloginip'   => 'lastloginip',
        'logincount'    => 'logincount'
    ),
    'user_access'       => array(
    	'userid'        => 'userid',
    	'nodeid'        => 'nodeid',
    	'groupid'       => 'groupid',
    ),
);
