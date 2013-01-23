<?php /* Smarty version Smarty-3.1.12, created on 2013-01-23 17:06:15
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2384650ffa8076ecae8-96615139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c5c6e4c81503ec4634bfed921489bfe0e76599' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\index.html',
      1 => 1358929971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2384650ffa8076ecae8-96615139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fileArray' => 0,
    'accessStatus' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ffa8078c04b4_39476771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ffa8078c04b4_39476771')) {function content_50ffa8078c04b4_39476771($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle">
	<h5>当前目录 <font color="red"><?php echo $_smarty_tpl->tpl_vars['fileArray']->value['cdir'];?>
</font></h5> |
	<h5>权限 <font color="red"><?php echo $_smarty_tpl->tpl_vars['fileArray']->value['perms'];?>
</font></h5>
</div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l350">文件名</li>
	<li class="table_list_l table_list_l150">文件大小</li>
	<li class="table_list_l table_list_l150">最后修改时间</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l200" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
	<ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="__APP__/index.php?s=Plugin/fileManage&dir=<?php echo $_smarty_tpl->tpl_vars['fileArray']->value['pdir'];?>
"><span class="icon" style="background:url(themes/green/images/fileicon/dir1.gif) no-repeat;">上级目录</span></a></li>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['fileArray']->value['filelist']){?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fileArray']->value['filelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <ul class="table_list">
		<li class="table_list_l table_list_l350">
			<?php if ($_smarty_tpl->tpl_vars['d']->value['filetype']=="dir"){?>
			<a class="nonetextdecoration" href="__APP__/index.php?s=Plugin/fileManage&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['d']->value['filename']);?>
"><span class="icon" style="background:url(themes/green/images/fileicon/<?php echo $_smarty_tpl->tpl_vars['d']->value['filetype'];?>
.gif) no-repeat;"><?php echo $_smarty_tpl->tpl_vars['d']->value['filename'];?>
</span></a>
			<?php }else{ ?>
			<span class="icon" style="background:url(themes/green/images/fileicon/<?php echo $_smarty_tpl->tpl_vars['d']->value['filetype'];?>
.gif) no-repeat;"><?php echo $_smarty_tpl->tpl_vars['d']->value['filename'];?>
</span>
			<?php }?>
		</li>
    	<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['filesize'];?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['filemtime'];?>
</li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l200" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<?php if ($_smarty_tpl->tpl_vars['d']->value['editable']){?>
    			<a name="fileEdit" href="__APP__/index.php?s=Plugin/fileEdit&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
&filename=<?php echo urlencode($_smarty_tpl->tpl_vars['d']->value['filename']);?>
">编辑</a>
    		<?php }?>
    		<a name="fileRename" href="__APP__/index.php?s=Plugin/fileRename&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
&filename=<?php echo urlencode($_smarty_tpl->tpl_vars['d']->value['filename']);?>
">改名</a>
    		<a name="fileDelete" href="__APP__/index.php?s=Plugin/fileDelete&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
&filename=<?php echo urlencode($_smarty_tpl->tpl_vars['d']->value['filename']);?>
">删除</a>
    		<?php if ($_smarty_tpl->tpl_vars['d']->value['filetype']!="dir"){?>
    			<a name="fileMove" href="__APP__/index.php?s=Plugin/fileMove&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
&filename=<?php echo urlencode($_smarty_tpl->tpl_vars['d']->value['filename']);?>
">移动</a>
    		<?php }?>
    	</li>
    	<?php }?>
    </ul>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
</div>
<div id="opBottom" class="opBottom">
	<a href="__APP__/index.php?s=Plugin/fileManage&dir=.">根目录</a>
	<a name="newfile" href="__APP__/index.php?s=Plugin/newFile&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
">新建文件</a>
	<a name="newdir" href="__APP__/index.php?s=Plugin/newDir&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
">新建目录</a>
	<a name="fileupload" href="__APP__/index.php?s=Plugin/fileUpload&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
">文件上传</a>
	<a name="spacecheck" href="__APP__/index.php?s=Plugin/spaceCheck&dir=<?php echo urlencode($_smarty_tpl->tpl_vars['fileArray']->value['cdir']);?>
">目录空间</a>
</div>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function (){
var fileClass = function (){
	var Obj = {
		fileRename: $("a[name=fileRename]"),
		fileDelete: $("a[name=fileDelete]"),
		fileMove: $("a[name=fileMove]"),
		newfile: $("a[name=newfile]"),
		newdir: $("a[name=newdir]"),
		spacecheck: $("a[name=spacecheck]"),
		fileupload: $("a[name=fileupload]")
	}
	Obj.fileRename.colorbox();
	Obj.fileRename.click(function (){
		$(this).attr("href",$(this).attr("href"));
	});

	//文件删除
	Obj.fileDelete.click(function (){
		if (window.confirm("确定删除吗？")) {
			var d = {
			};
			$.post($(this).attr("href"),d,function (data){
				alert(data.info);
				if (!data.status) location.href = location.href;
			},'json');
		}
		return false;
	});

	//文件移动
	Obj.fileMove.colorbox();
	Obj.fileMove.click(function (){
		$(this).attr("href",$(this).attr("href"));
	});
	//新建目录
	Obj.newdir.colorbox();
	Obj.newdir.click(function (){
		$(this).attr("href",$(this).attr("href"));
	});
	//文件上传
	Obj.fileupload.colorbox();
	Obj.fileupload.click(function (){
		$(this).attr("href",$(this).attr("href"));
	});
	//空间检查
	Obj.spacecheck.colorbox();
	Obj.spacecheck.click(function (){
		$(this).attr("href",$(this).attr("href"));
	});
}
fileClass();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>