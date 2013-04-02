<?php /* Smarty version Smarty-3.1.12, created on 2013-04-02 14:38:07
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Product\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:11222515a7ccf04a773-24983838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f2d4fa7c368dcfc63c103a21c0f89c4e385a235' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Product\\edit.html',
      1 => 1364797254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11222515a7ccf04a773-24983838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'ArchiveInfo' => 0,
    'columnTree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515a7ccf19a522_53472516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515a7ccf19a522_53472516')) {function content_515a7ccf19a522_53472516($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>修改文档资料</h5></div>
	<form name="newform" action="__APP__/index.php?s=Product/saveEdit" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="archiveid" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['id'];?>
" />
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>产品详情</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>产品图片</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>产品描述</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>文档标题:</span>
					<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['title'];?>
" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['tag'];?>
" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

					</select>
				</li>
				<li class="formblock">
					<span>文档缩略图:</span>
					<input type="file" name="image" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['thumbimage'];?>
" class="input w150" style="height: 22px;" />
				</li>
				<li class="formblock">
					<span>文档来源:</span>
					<input type="text" name="source" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['source'];?>
" class="input w200" />
				</li>
				<li class="formblock">
					<span>作者:</span>
					<input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['author'];?>
" class="input w150" />
				</li>
				<li class="formblock">
					<span>更新时间:</span>
					<input type="text" id="dpicker0" name="publishtime" value="<?php echo mkdate($_smarty_tpl->tpl_vars['ArchiveInfo']->value['updatetime']);?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>是否允许评论: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="status" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['ArchiveInfo']->value['status']==1){?>checked<?php }?> />允许</label>
						<label><input type="radio" name="status" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['ArchiveInfo']->value['status']==0){?>checked<?php }?> />禁止</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="seotitle" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['seotitle'];?>
" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"><?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['keyword'];?>
</textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47"><?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['description'];?>
</textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>型号:</span>
					<input type="text" name="model" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['model'];?>
" class="input w150" />
				</li>
				<li class="formblock">
					<span>品牌:</span>
					<input type="text" name="brand" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['brand'];?>
" class="input w200" />
				</li>
				<li class="formblock">
					<span>颜色:</span>
					<input type="text" name="color" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['color'];?>
" class="input w200" />
					多种颜色逗号,隔开
				</li>
				<li class="formblock">
					<span>材质:</span>
					<input type="text" name="material" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['material'];?>
" class="input w300" />
				</li>
				<li class="formblock">
					<span>尺寸:</span>
					<input type="text" name="size" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['size'];?>
" class="input w100" />
				</li>
				<li class="formblock">
					<span>价格:</span>
					<input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['price'];?>
" class="input w150" />
				</li>
				<li class="formblock">
					<span>数量:</span>
					<input type="text" name="total" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['total'];?>
" class="input w200" />
				</li>
			</div>
			<div class="shtabcontent">
				<?php echo $_smarty_tpl->getSubTemplate ("public/imageUpload.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>详细描述:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"><?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['instruction'];?>
</textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="修改" />
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
    		alert("请填写文档标题!");
    		return false;
    	}
    	var columnid = $(this).find("select[name=columnid]").val();
    	if (!columnid) {
    		alert("请选择文档所在主栏目!");
    		return false;
    	}
    });
    $("select[name=columnid]").find("option").each(function (){
    	if ($(this).val()=="<?php echo $_smarty_tpl->tpl_vars['ArchiveInfo']->value['columnid'];?>
") $(this).attr("selected",true);
    });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>