<div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>文件移动</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Plugin/fileMove&action=save" method="post" id="ajaxform">
	<input type="hidden" name="dir" value="." />
	<input type="hidden" name="filename" value=".DS_Store" />
	<ul>
		<li class="formblock">
			<span>文件：</span>
			<div class="caption">.DS_Store</div>
		</li>
		<li class="formblock">
			<span>原目录：</span>
			<div class="caption">.</div>
		</li>
		<li class="formblock">
			<span>新目录：</span>
			<input type="text" name="newdir" value="" class="input w250" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="移动" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>