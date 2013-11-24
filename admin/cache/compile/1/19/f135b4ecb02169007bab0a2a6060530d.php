<div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑节点信息</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Node/NodeEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="nodeid" value="5" />
	<ul>
		<li class="formblock">
			<span>组: </span>
			<select id="select" name="groupid" style="width:150px;">
				<option value="">|-组菜单</option>
								<option value="1" selected>&nbsp;|-系统管理</option>
								<option value="2" >&nbsp;|-会员中心</option>
								<option value="3" >&nbsp;|-核心内容</option>
								<option value="4" >&nbsp;|-网站更新</option>
								<option value="5" >&nbsp;|-系统插件</option>
								<option value="6" >&nbsp;|-系统设置</option>
							</select>
		</li>
		<li class="formblock">
			<span>父节点: </span>
			<select name="pid" flag="nodepid" style="width:150px;">
				<option value="">|-节点菜单</option>
								<option value="1" >&nbsp;|-角色管理</option>
								<option value="4" selected>&nbsp;|-日志管理</option>
								<option value="6" >&nbsp;|-组管理</option>
								<option value="8" >&nbsp;|-节点管理</option>
								<option value="11" >&nbsp;|-管理员用户管理</option>
							</select>
		</li>
		<li class="formblock">
			<span>名称: </span>
			<input type="text" name="title" value="管理员登录日志" class="input w150" />
		</li>
		<li class="formblock">
			<span>描述: </span>
			<input type="text" name="remark" value="" class="input w150" />
		</li>
		<li class="formblock">
			<span>Control: </span>
			<input type="text" name="control" value="Log" class="input w100" />
		</li>
		<li class="formblock">
			<span>Action: </span>
			<input type="text" name="action" value="AdminLoginLog" class="input w150" />
		</li>
		<li class="formblock">
			<span>是否显示: </span>
			<div class="item_list fleft">
				<label><input type="radio" name="isshow" value="1" class="radio" checked />是</label>
				<label><input type="radio" name="isshow" value="0" class="radio"  />否</label>
			</div>
		</li>
		<li class="formblock bordernone">
			<input type="submit" name="subut" class="button btnblue2" value="确定" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>