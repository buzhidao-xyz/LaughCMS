<div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>文件上传</h5>
	</div>
	<form name="boxform" action="/laugh/admin/index.php?s=Plugin/fileUpload&action=save" method="post" enctype="multipart/form-data">
	<input type="hidden" name="dir" value="." />
	<ul>
		<li class="formblock">
			<span>当前目录：</span>
			<div class="caption">.</div>
		</li>
		<li class="formblock">
			<span>选择文件：</span>
			<input type="file" name="newfile" value="" class="input w250" style="height: 22px;" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="上传" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>