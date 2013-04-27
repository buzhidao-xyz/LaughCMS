<div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>文件移动</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Plugin/fileMove&action=save" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="dir" value="./a" />
	<input type="hidden" name="filename" value="index.html" />
	<ul>
		<li class="formblock">
			<span>文件：</span>
			<div class="caption">index.html</div>
		</li>
		<li class="formblock">
			<span>原目录：</span>
			<div class="caption">./a</div>
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