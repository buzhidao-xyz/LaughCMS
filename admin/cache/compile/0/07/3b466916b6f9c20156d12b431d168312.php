<div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>新建目录</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Plugin/newDir&action=save" method="post" id="ajaxform">
	<input type="hidden" name="dir" value="./docs" class="input w200" />
	<ul>
		<li class="formblock">
			<span>当前目录：</span>
			<div class="caption">./docs</div>
		</li>
		<li class="formblock">
			<span>目录名：</span>
			<input type="text" name="newdir" value="" class="input w200" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="保存" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>