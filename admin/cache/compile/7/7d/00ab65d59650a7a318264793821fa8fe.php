<div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>移动文档栏目</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Archive/moveArchive&action=save" method="post" id="ajaxform">
	<ul>
		<li>
			<span>文档ID:</span>
			<input type="text" name="archiveid" value="11,9" class="input w200" readonly /> (','号分开)
		</li>
		<li>
			<span>目标栏目: </span>
			<select id="select" name="columnid" style="width:230px;">
				<option value="">|-请选择栏目...</option><option value="6">&nbsp;&nbsp;|-产品展示</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;|-网络产品</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;|-电子产品</option>
			</select>
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="修改" />
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