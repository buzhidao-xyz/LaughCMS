<!DOCTYPE html>
<html>
<head>
	<title>Laugh Admin Center</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/table.css" media="screen" />
	<link id="color" rel="stylesheet" type="text/css" href="themes/smooth/style/colors/blue.css" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/common.css" media="screen" />
	<!-- scripts (jquery) -->
	<script src="themes/smooth/js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<!--[if IE]><script language="javascript" type="text/javascript" src="themes/smooth/js/excanvas.min.js"></script><![endif]-->
	<script src="themes/smooth/js/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>
	<script src="themes/smooth/js/jquery.ui.selectmenu.js" type="text/javascript"></script>
	<script src="themes/smooth/js/jquery.flot.min.js" type="text/javascript"></script>
	<script src="themes/smooth/js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<script src="themes/smooth/js/tiny_mce/jquery.tinymce.js" type="text/javascript"></script>
	<!-- scripts (custom) -->
	<script src="themes/smooth/js/smooth.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.menu.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.chart.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.table.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.form.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.dialog.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.autocomplete.js" type="text/javascript"></script>
	<script src="themes/smooth/js/div_window.js" type="text/javascript"></script>
	<script src="themes/smooth/js/common.js" type="text/javascript"></script>
	<script src="themes/smooth/js/ajax.js" type="text/javascript"></script>
	<script type="text/javascript">
	var JS_APP = '/laugh/admin';
	var style_path = "themes/smooth/style/colors";
	$(document).ready(function () {
		$("#box-tabs, #box-left-tabs").tabs();
	});
	</script>
</head>

<body>
<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>管理员列表 【目前共有3条数据】</h5>
			</div>
			<div class="table">
				<ul class="table_list_title">
			    	<li class="table_list_l table_list_l120">用户名</li>
			    	<li class="table_list_l table_list_l150">拥有权限角色</li>
			    	<li class="table_list_l table_list_l150">创建时间</li>
			    	<li class="table_list_l table_list_l150">最后登录时间</li>
			    	<li class="table_list_l table_list_l120">最后登录IP</li>
			    	<li class="table_list_l table_list_l80">登录次数</li>
			    	<li class="table_list_l table_list_l80">账户状态</li>
			    	<li class="table_list_l table_list_l150">操作</li>
			    </ul>
			    			    			    <ul class="table_list role_send_table">
					<li class="table_list_l table_list_l120">admin</li>
    				<li class="table_list_l table_list_l150" name="role" roleid="" title=""></li>
			    	<li class="table_list_l table_list_l150">2011-12-15 08:47:32</li>
			    	<li class="table_list_l table_list_l150">2012-12-03 13:59:30</li>
			    	<li class="table_list_l table_list_l120">127.0.0.1</li>
			    	<li class="table_list_l table_list_l80">22</li>
			    	<li class="table_list_l table_list_l80">
			    					    			启用
			    					    	</li>
			    	<li class="table_list_l table_list_l150">
			    					    	</li>
			    </ul>
			    			    <ul class="table_list role_send_table">
					<li class="table_list_l table_list_l120">luochuan</li>
    				<li class="table_list_l table_list_l150" name="role" roleid="1,2" title="超级管理员 管理员">超级管理员 管理员</li>
			    	<li class="table_list_l table_list_l150">2011-12-19 11:36:13</li>
			    	<li class="table_list_l table_list_l150">2012-11-22 14:25:45</li>
			    	<li class="table_list_l table_list_l120">127.0.0.1</li>
			    	<li class="table_list_l table_list_l80">1</li>
			    	<li class="table_list_l table_list_l80">
			    					    			<a delurl="/laugh/admin/?s=Admin/upAdminStatus&id=2&status=0" href="javascript:;" name="del" msg="确定禁用吗？">启用</a>
			    					    	</li>
			    	<li class="table_list_l table_list_l150">
			    					    		<a href="javascript:;" name="modify" id="2" username="luochuan">角色权限</a>
			    		<a delurl="/laugh/admin/?s=Admin/resetPassword&id=2" href="javascript:;" name="del" msg="确定重置密码吗？">重置密码</a>
			    		<a delurl="/laugh/admin/?s=Admin/delteAdmin&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    					    	</li>
			    </ul>
			    			    <ul class="table_list role_send_table">
					<li class="table_list_l table_list_l120">test</li>
    				<li class="table_list_l table_list_l150" name="role" roleid="1,2" title="超级管理员 管理员">超级管理员 管理员</li>
			    	<li class="table_list_l table_list_l150">2011-12-30 10:20:17</li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l120"></li>
			    	<li class="table_list_l table_list_l80">0</li>
			    	<li class="table_list_l table_list_l80">
			    					    			<a delurl="/laugh/admin/?s=Admin/upAdminStatus&id=3&status=0" href="javascript:;" name="del" msg="确定禁用吗？">启用</a>
			    					    	</li>
			    	<li class="table_list_l table_list_l150">
			    					    		<a href="javascript:;" name="modify" id="3" username="test">角色权限</a>
			    		<a delurl="/laugh/admin/?s=Admin/resetPassword&id=3" href="javascript:;" name="del" msg="确定重置密码吗？">重置密码</a>
			    		<a delurl="/laugh/admin/?s=Admin/delteAdmin&id=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    					    	</li>
			    </ul>
			    			        			<div class="pagination pagination-left">
	<div class="results">
		<span>显示数据 1-3 / 3</span>
	</div>
	</div>
			</div>
		</div>
	</div>
</div>
<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<form id="user_role_modify_div_form" action="/laugh/admin/?s=Admin/roleAdmin">
		<input name="id" id="id" value="" type="hidden" />
		<input name="roleid" id="roleid" value="" type="hidden">
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<div class="form">
			<div class="fields">
			<ul class="formbody modify_div_box">
			<table align="center" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
				<tr>
					<td  class="stgap" width="85%">
						<li class="noborder formblock colorblock">
							<span class="label">选择角色: </span>
							<select name="roles" id="roles">
																<option value="1" desc="超级管理员 具有全站管理权限">超级管理员</option>
																<option value="2" desc="普通管理员 管理某些模块">管理员</option>
															</select>
						</li>
					</td>
					<td class="stgap" width="15%">
						<div class="buttons" style="margin-left:10px;"><input type="button" name="subut" id="addrole" value="添加" /></div>
					</td>
				</tr>
				<tr id="rolehr">
					<td class="stgap" colspan="2"><hr></td>
				</tr>
				<tr id="rolesubmit">
					<td colspan=2><div class="buttons"><input type="submit" name="subut" value="完成提交" /></div></td>
				</tr>
			</table>
			</ul>
			</div>
		</div>
	</form>
</div>
<!--弹出层-->
<script src="themes/smooth/js/role.js" type="text/javascript"></script>
</body>
</html>