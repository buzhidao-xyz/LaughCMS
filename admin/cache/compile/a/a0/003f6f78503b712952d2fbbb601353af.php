<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Laugh Admin Center</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/reset.css" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/style.css" media="screen" />
	<link id="color" rel="stylesheet" type="text/css" href="themes/smooth/style/colors/blue.css" />
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
	<script type="text/javascript">
	$(document).ready(function () {
		var JS_APP = '/laugh/admin';
		var style_path = "themes/smooth/style/colors";

		$("#box-tabs, #box-left-tabs").tabs();
	});
	</script>
</head>

<body>
<div id="control" style="display:none;">
	<div class="control_nav">
		<h3>组节点列表</h3>
	</div>
	<div class="captitle"><h5>兑奖申请列表【目前共有5条数据】</h5></div>
    <ul class="table_list_title">
    	<li class="table_list_l table_list_l150">组节点名称</li>
    	<li class="table_list_l table_list_l170">创建时间</li>
    	<li class="table_list_l table_list_l100">是/否显示</li>
    	<li class="table_list_l table_list_l150">操作</li>
    </ul>
             <ul class="table_list">
		<li class="table_list_l table_list_l150">系统管理</li>
    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
    	<li class="table_list_l table_list_l100">显</li>
    	<li class="table_list_l table_list_l150">
    		<a href="javascript:;" name="modify" id="1" title="系统管理" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">用户中心</li>
    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
    	<li class="table_list_l table_list_l100">显</li>
    	<li class="table_list_l table_list_l150">
    		<a href="javascript:;" name="modify" id="2" title="用户中心" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">文章管理</li>
    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
    	<li class="table_list_l table_list_l100">显</li>
    	<li class="table_list_l table_list_l150">
    		<a href="javascript:;" name="modify" id="3" title="文章管理" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">网站设置</li>
    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
    	<li class="table_list_l table_list_l100">显</li>
    	<li class="table_list_l table_list_l150">
    		<a href="javascript:;" name="modify" id="4" title="网站设置" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">系统工具</li>
    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
    	<li class="table_list_l table_list_l100">显</li>
    	<li class="table_list_l table_list_l150">
    		<a href="javascript:;" name="modify" id="5" title="系统工具" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
            
</div>
<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<form id="modify_div_form" action="/laugh/admin/?s=Group/upGroup">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<ul class="formbody modify_div_box">
			<li class="formblock colorblock">
				<span>组节点名称: </span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="auto colorblock">
				<span>是否显示: </span>
				<div class="show_list fleft">
					<label><input type="radio" name="isshow" value="1" class="radio" />是</label>
					<label><input type="radio" name="isshow" value="0" class="radio" />否</label>
				</div>
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="修改" />
			</li>
		</ul>
	</form>
</div>
<!--弹出层-->
<div id="content">
	<div class="blankhd"></div>
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新组节点表单</h5>
			</div>
			<form name="newform" action="/laugh/admin/?s=Group/saveGroup" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field  field-first">
						<div class="label">
							<label for="input-small">名称:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="title" class="small" />
						</div>
					</div>
					<div class="buttons">
						<input type="submit" name="submit" value="添加" />
					</div>
				</div>
			</div>
			</form>
		</div>
		<div class="box mtop10">
			<div class="title">
				<h5>组节点列表</h5>
			</div>
			<div class="table">
				<form action="" method="post">
				<table>
					<thead>
						<tr>
							<th class="left">Title</th>
							<th>Price</th>
							<th>Added</th>
							<th>Category</th>
							<th class="selected last"><input type="checkbox" class="checkall" /></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="title">24" LED Monitor</td>
							<td class="price">$110.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Monitors</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
						<tr>
							<td class="title">27" LCD Flat Panel</td>
							<td class="price">$150.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Monitors</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
						<tr>
							<td class="title">6GB 240-Pin DDR3 SDRAM DDR3 1600</td>
							<td class="price">$80.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Memory</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
						<tr>
							<td class="title">500GB 7200 RPM 16MB Cache SATA 3.0Gb/s 3.5</td>
							<td class="price">$92.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Hard Drives</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
						<tr>
							<td class="title">2GB 240-Pin DDR3 SDRAM DDR3 1600</td>
							<td class="price">$52.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Memory</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
					</tbody>
				</table>
				<!-- pagination -->
				<div class="pagination pagination-left">
					<div class="results">
						<span>showing results 1-10 of 207</span>
					</div>
					<ul class="pager">
						<li class="disabled">&laquo; prev</li>
						<li class="current">1</li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li><a href="">5</a></li>
						<li class="separator">...</li>
						<li><a href="">20</a></li>
						<li><a href="">21</a></li>
						<li><a href="">next &raquo;</a></li>
					</ul>
				</div>
				<!-- end pagination -->
				<!-- table action -->
				<div class="action">
					<select name="action">
						<option value="" class="locked">Set status to Deleted</option>
						<option value="" class="unlocked">Set status to Published</option>
						<option value="" class="folder-open">Move to Category</option>
					</select>
					<div class="button">
						<input type="submit" name="submit" value="Apply to Selected" />
					</div>
				</div>
				<!-- end table action -->
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>