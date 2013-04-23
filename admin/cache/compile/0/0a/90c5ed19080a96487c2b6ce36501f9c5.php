<div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>编辑链接信息</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Plugin/FlinkEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="linkid" value="1" />
	<ul>
		<li class="formblock">
			<span>分类名称：</span>
			<select name="catalogid" style="width:150px;">
				<option value="">|-分类列表</option>
								<option value="1" >&nbsp;|-分类一</option>
								<option value="2" selected>&nbsp;|-分类二</option>
							</select>
		</li>
		<li class="formblock">
			<span>链接名称：</span>
			<input type="text" name="linkname" value="百度" class="input w150" />
		</li>
		<li class="formblock">
			<span>链接地址：</span>
			<input type="text" name="linkurl" value="http://www.baidu.com/" class="input w250" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>