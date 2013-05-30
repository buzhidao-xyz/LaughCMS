<div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑导航信息</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Plugin/NavigationEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="navigationid" value="2" />
	<ul>
		<li class="formblock">
			<span>导航名称：</span>
			<input type="text" name="title" value="新闻资讯" class="input w200" />
		</li>
		<li class="formblock">
			<span>导航地址：</span>
			<input type="text" name="link" value="http://localhost:82/laugh/index.php?s=Article/index&amp;columnid=2" class="input w350" />
		</li>
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="编辑" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>