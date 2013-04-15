<div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>编辑链接分类信息</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Plugin/FlinkCatalogEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="catalogid" value="2" />
	<ul>
		<li class="formblock">
			<span>分类名称：</span>
			<input type="text" name="catalogname" value="分类二" class="input w200" />
		</li>
		<li class="formblock">
			<span>排序位置：</span>
			<input type="text" name="sort" value="2" class="input w200" />
		</li>
		<li class="formblock">
			<span>是/否显示：</span>
			<div class="item_list fleft">
				<label><input type="radio" name="state" value="1" class="radio"  />显示</label>
				<label><input type="radio" name="state" value="0" class="radio" checked="checked" />隐藏</label>
			</div>
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>