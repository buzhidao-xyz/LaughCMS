<div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>移动文档栏目</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Archive/moveArchive&action=save" method="post" id="colorBoxAjaxForm">
	<ul>
		<li>
			<span>文档ID:</span>
			<input type="text" name="archiveid" value="" class="input w200" readonly /> (','号分开)
		</li>
		<li>
			<span>目标栏目: </span>
			<select id="select" name="columnid" style="width:230px;">
				<option value="">|-请选择栏目...</option><option value="2">&nbsp;&nbsp;|-新闻资讯</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;|-IT知识</option><option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-PHP知识</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;|-网络知识</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-前端知识</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;|-数据库知识</option>
			</select>
		</li>
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>
<script type="text/javascript">
$("form[name=boxform]").submit(function (){
	if (!$("input[name=archiveid]").val()) {
		alert("请选择文档！");
		return false;
	}
	if (!$("select[name=columnid]").val()) {
		alert("请选择目标栏目！");
		return false;
	}
});
</script>