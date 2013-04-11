<?php /* Smarty version Smarty-3.1.12, created on 2013-04-11 16:15:57
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\ColumnModel\editSinglePage.html" */ ?>
<?php /*%%SmartyHeaderCode:6165166713d575243-47059054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88d04b8943a8417dacdbb4798561958fefceb67a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\ColumnModel\\editSinglePage.html',
      1 => 1364979320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6165166713d575243-47059054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'singlepageInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5166713d697a35_91997162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5166713d697a35_91997162')) {function content_5166713d697a35_91997162($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>增加新页面</h5></div>
	<form name="newform" action="__APP__/index.php?s=CTModel/saveEditSinglePage" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="singlepageid" value="<?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['id'];?>
" />
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>文档内容</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>文档标题:</span>
					<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['title'];?>
" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="<?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['tag'];?>
" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文件名:</span>
					<input type="text" name="filename" value="<?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['filename'];?>
" class="input w200" />
					(相对于网站安装目录)
				</li>
				<li class="formblock">
					<span>模板文件名:</span>
					<input type="text" name="template" value="<?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['template'];?>
" class="input w250" />
				</li>
				<li class="formblock">
					<span>文档缩略图:</span>
					<input type="file" name="image" value="" class="input w150 inputfile" />
				</li>
				<li class="formblock">
					<span>作者:</span>
					<input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['author'];?>
" class="input w150" />
				</li>
				<li class="formblock">
					<span>发布时间:</span>
					<input type="text" id="dpicker0" name="publishtime" value="<?php echo mkdate($_smarty_tpl->tpl_vars['singlepageInfo']->value['publishtime']);?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>是否允许评论: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="status" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['singlepageInfo']->value['status']==1){?>checked<?php }?> />允许</label>
						<label><input type="radio" name="status" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['singlepageInfo']->value['status']==0){?>checked<?php }?> />禁止</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="seotitle" value="<?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['seotitle'];?>
" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"><?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['keyword'];?>
</textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47"><?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['description'];?>
</textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>文档内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"><?php echo $_smarty_tpl->tpl_vars['singlepageInfo']->value['content'];?>
</textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
    UE.getEditor('myEditor',{
    });
    $("form[name=newform]").submit(function(){
    	var title = $(this).find("input[name=title]").val();
    	if (!title) {
    		alert("请填写页面标题!");
    		return false;
    	}
    });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>