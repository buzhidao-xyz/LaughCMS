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
				<h5>节点列表 【目前共有2条数据】</h5>
			</div>
			<div class="table">
				<ul class="table_list_title">
			    	<li class="table_list_l table_list_l150">名称</li>
			    	<li class="table_list_l table_list_l200">描述</li>
			    	<li class="table_list_l table_list_l100">Control</li>
			    	<li class="table_list_l table_list_l120">Action</li>
			    	<li class="table_list_l table_list_l150">创建时间</li>
			    	<li class="table_list_l table_list_l80">是/否显示</li>
			    	<li class="table_list_l table_list_l100">操作</li>
			    </ul>
			    			     			    <ul class="table_list">
					<li class="table_list_l table_list_l150">一键更新网站</li>
					<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
			    	<li class="table_list_l table_list_l100">Make</li>
			    	<li class="table_list_l table_list_l120">makeHtml</li>
			    	<li class="table_list_l table_list_l150">2012-11-19 17:13:35</li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="21" title="一键更新网站" remark="" groupid="4" pid="20" control="Make" action="makeHtml" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/?s=Node/deleteNode&id=21" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">更新系统缓存</li>
					<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
			    	<li class="table_list_l table_list_l100">System</li>
			    	<li class="table_list_l table_list_l120">upSystemCache</li>
			    	<li class="table_list_l table_list_l150">2012-11-19 17:14:34</li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="22" title="更新系统缓存" remark="" groupid="4" pid="20" control="System" action="upSystemCache" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/?s=Node/deleteNode&id=22" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			        			<div class="pagination pagination-left">
	<div class="results">
		<span>显示数据 21-2 / 2</span>
	</div>
	</div>
			</div>
		</div>
	</div>
</div>
<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<form id="modify_div_form" action="/laugh/admin/?s=Node/upNode">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<div class="form">
			<div class="fields">
				<div class="field field-first">
					<div class="label">
						<label for="select">组:</label>
					</div>
					<div class="select">
						<select name="groupid">
							<option value="" >|-组菜单</option>
														<option value="1">&nbsp;|-系统管理</option>
														<option value="2">&nbsp;|-用户中心</option>
														<option value="3">&nbsp;|-核心内容</option>
														<option value="4">&nbsp;|-网站更新</option>
														<option value="5">&nbsp;|-系统插件</option>
														<option value="6">&nbsp;|-系统设置</option>
													</select>
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="select">父节点:</label>
					</div>
					<div class="select" id="nodepid">
						<select name="pid">
							<option value="" >|-节点菜单</option>
						</select>
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="input-small">名称:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="title" class="small" />
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="input-small">描述:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="remark" class="small" />
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="input-small">Control:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="control" class="small" />
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="input-small">Action:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="action" class="small" />
					</div>
				</div>
				<div class="buttons">
					<input type="submit" name="submit" value="修改" />
				</div>
			</div>
		</div>
	</form>
</div>
<!--弹出层-->
</body>
</html>