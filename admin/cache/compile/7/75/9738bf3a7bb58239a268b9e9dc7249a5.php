<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="themes/blue/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/admin';
</script>
</head>

<body>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="captitle"><h5>组节点列表【目前共有2条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l120">用户名</li>
	<li class="table_list_l table_list_l150">拥有权限角色</li>
	<li class="table_list_l table_list_l150">创建时间</li>
	<li class="table_list_l table_list_l150">最后登录时间</li>
	<li class="table_list_l table_list_l120">最后登录IP</li>
	<li class="table_list_l table_list_l80">登录次数</li>
		<li class="table_list_l table_list_l80" accessStatus=1>账户状态</li>
	<li class="table_list_l table_list_l150" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
			<ul class="table_list role_send_table">
		<li class="table_list_l table_list_l120">admin</li>
		<li class="table_list_l table_list_l150" name="role" roleid="" title=""></li>
		<li class="table_list_l table_list_l150">2011-12-15 08:47:32</li>
		<li class="table_list_l table_list_l150">2012-12-13 17:01:36</li>
		<li class="table_list_l table_list_l120">127.0.0.1</li>
		<li class="table_list_l table_list_l80">62</li>
				<li class="table_list_l table_list_l80" accessStatus=1>
							启用
					</li>
		<li class="table_list_l table_list_l150" accessStatus=1>
					</li>
			</ul>
		<ul class="table_list role_send_table">
		<li class="table_list_l table_list_l120">luochuan</li>
		<li class="table_list_l table_list_l150" name="role" roleid="1,2" title="总管理员 管理员">总管理员 管理员</li>
		<li class="table_list_l table_list_l150">2011-12-19 11:36:13</li>
		<li class="table_list_l table_list_l150">2012-12-13 11:13:41</li>
		<li class="table_list_l table_list_l120">127.0.0.1</li>
		<li class="table_list_l table_list_l80">12</li>
				<li class="table_list_l table_list_l80" accessStatus=1>
							<a delurl="/admin/index.php?s=Admin/upAdminStatus&id=2&status=0" href="javascript:;" name="del" msg="确定禁用吗？">启用</a>
					</li>
		<li class="table_list_l table_list_l150" accessStatus=1>
						<a href="javascript:;" name="modify" id="2" username="luochuan">角色权限</a>
			<a delurl="/admin/index.php?s=Admin/resetPassword&id=2" href="javascript:;" name="del" msg="确定重置密码吗？">重置密码</a>
			<a delurl="/admin/index.php?s=Admin/delteAdmin&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
					</li>
			</ul>
		</div>

<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;" accessStatus=1>
	<div class="modify_div_Top">
		<h5>编辑组节点信息</h5>
		<a href="javascript:;" id="modify_div_close" class="close">×</a>
	</div>
	<form id="user_role_modify_div_form" action="/admin/index.php?s=Admin/roleAdmin">
		<input name="id" id="id" value="" type="hidden" />
		<input name="roleid" id="roleid" value="" type="hidden">
		<ul class="formbody modify_div_box">
			<table align="center" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
				<tr>
					<td  class="stgap" width="85%">
						<li class="formblock">
							<span>选择角色: </span>
							<select name="roles" id="roles">
																<option value="1" desc="总管理员 具有大部分管理权限">总管理员</option>
																<option value="2" desc="普通管理员 管理某些模块">管理员</option>
															</select>
						</li>
					</td>
					<td class="stgap" width="15%" style="border-bottom:1px dashed #E1E1E1;">
						<input type="button" name="subut" id="addrole" class="button btnblue2" value="添加" style="margin:0;" />
					</td>
				</tr>
				<tr id="rolehr">
					<td class="stgap" colspan="2" style="height:1px;line-height:1px;font-size:1px;"></td>
				</tr>
				<tr id="rolesubmit">
					<td colspan=2><input type="submit" name="subut" class="button btnyellow4" value="完成提交" /></div></td>
				</tr>
			</table>
		</ul>
	</form>
	<div class="modify_div_Bottom"></div>
</div>
<!--弹出层-->
<script src="themes/blue/js/role.js" type="text/javascript"></script>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>