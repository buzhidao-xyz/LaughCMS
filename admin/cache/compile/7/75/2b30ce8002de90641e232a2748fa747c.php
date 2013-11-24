<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost/laugh';
function colorboxAjaxHtml(url) {
	$.post(url,{},function (data){
		$.colorbox({ html: data });
	});
}
function colorboxHtml(url) {
	$.colorbox({ href: url });
}
function colorboxImage(url) {
	$.colorbox({ href: url });
}
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<div id="controlContent">
<div class="captitle"><h5>栏目列表</h5></div>
<div id="columnList">
	<div class="ul columnListTitle">
		<div class="li columnListd700" flag="columnListTitle" style="text-indent:0;">栏目名称</div>
		<div class="li columnListd300" flag="columnListTitle">操作</div>
	</div>
	<div class="ul columnListTable">
						<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="1"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=/index&columnid=1">网站首页</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="/laugh/admin/index.php?s=Article/index&columnid=1">栏目文档</a> |
				<a href="/laugh/admin/index.php?s=Column/newColumn&columnid=1">增加子栏目</a> |
				<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=1">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=1" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
				<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="2"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Article/index&columnid=2">新闻资讯</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="/laugh/admin/index.php?s=Article/index&columnid=2">栏目文档</a> |
				<a href="/laugh/admin/index.php?s=Column/newColumn&columnid=2">增加子栏目</a> |
				<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=2">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=2" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
				<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="6"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Product/index&columnid=6">产品展示</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="/laugh/admin/index.php?s=Article/index&columnid=6">栏目文档</a> |
				<a href="/laugh/admin/index.php?s=Column/newColumn&columnid=6">增加子栏目</a> |
				<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=6">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=6" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
				<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="7"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Image/index&columnid=7">客户案例</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="/laugh/admin/index.php?s=Article/index&columnid=7">栏目文档</a> |
				<a href="/laugh/admin/index.php?s=Column/newColumn&columnid=7">增加子栏目</a> |
				<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=7">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=7" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
				<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="8"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Download/index&columnid=8">下载中心</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="/laugh/admin/index.php?s=Article/index&columnid=8">栏目文档</a> |
				<a href="/laugh/admin/index.php?s=Column/newColumn&columnid=8">增加子栏目</a> |
				<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=8">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=8" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
				<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="9"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Plugin/index&columnid=9">招贤纳士</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="/laugh/admin/index.php?s=Article/index&columnid=9">栏目文档</a> |
				<a href="/laugh/admin/index.php?s=Column/newColumn&columnid=9">增加子栏目</a> |
				<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=9">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=9" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
				<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="10"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Public/index&columnid=10">关于我们</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="/laugh/admin/index.php?s=Article/index&columnid=10">栏目文档</a> |
				<a href="/laugh/admin/index.php?s=Column/newColumn&columnid=10">增加子栏目</a> |
				<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=10">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=10" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
				<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="11"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Public/index&columnid=11">联系我们</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="/laugh/admin/index.php?s=Article/index&columnid=11">栏目文档</a> |
				<a href="/laugh/admin/index.php?s=Column/newColumn&columnid=11">增加子栏目</a> |
				<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=11">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=11" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
					</div>
	<div class="columnList">
	</div>
</div>
<link rel="stylesheet" type="text/css" href="themes/blue/style/column.css" media="screen" />
<script type="text/javascript">
$(document).ready(function(){
	var column = function (){
		var columnObj = {
			columnplusmius: $("#columnList .columnListTable .columnlistd div.columnplusmius"),
			columnmius: $("#columnList .columnListTable .columnlistd div.columnmius"),
		}

		columnObj.showSubColumn = function (){
			columnObj.columnplusmius.live("click", function (){
				var that = $(this);
				var subthat = that.parent().next();
				if (subthat.css("display") == 'block') {
					that.removeClass("columnmius");
					that.addClass("columnplus");
					subthat.css("display","none");
				} else {
					that.removeClass("columnplus");
					that.addClass("columnmius");
					subthat.css("display","block");
					if (!subthat.text().trim()) {
						var d = {
							columnid: $(this).attr("columnid")
						}
						$.post(JS_APP+"/index.php?s=Column/getSubColumn",d,function(data){
							if (!data.status) {
								subthat.html(data.data);
							} else {
								alert(data.info);
							}
						},'json')
					}
				}
			});
		}(window)
	}
	if ($("#columnList .columnListTable .columnlistd").length) {
		column();
	}
});
</script>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>