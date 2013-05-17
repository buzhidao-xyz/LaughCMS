<div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑广告信息</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Advertise/AdvertiseEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="advertiseid" value="6" />
	<ul>
		<li class="formblock">
			<span>标题：</span>
			<input type="text" name="title" value="栏目顶部广告" class="input" style="width:250px;" />
		</li>
		<li class="formblock">
			<span>链接：</span>
			<input type="text" name="link" value="http://www.163.com/" class="input w350" />
		</li>
		<li class="formblock">
			<span>是否启用: </span>
			<div class="item_list fleft">
				<label><input type="radio" name="status" value="1" class="radio"  />启用</label>
				<label><input type="radio" name="status" value="0" class="radio" checked="checked" />禁用</label>
			</div>
		</li>
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="编辑" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>