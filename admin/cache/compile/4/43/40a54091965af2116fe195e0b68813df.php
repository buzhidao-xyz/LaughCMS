<div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑组菜单</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Group/GroupEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="groupid" value="2" />
	<ul>
		<li class="formblock">
			<span>组菜单名称: </span>
			<input type="text" name="title" value="会员中心" class="input w200" />
		</li>
		<li class="formblock">
			<span>是否显示: </span>
			<div class="item_list fleft">
				<label><input type="radio" name="isshow" value="1" class="radio" checked />是</label>
				<label><input type="radio" name="isshow" value="0" class="radio"  />否</label>
			</div>
		</li>
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="确定" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>