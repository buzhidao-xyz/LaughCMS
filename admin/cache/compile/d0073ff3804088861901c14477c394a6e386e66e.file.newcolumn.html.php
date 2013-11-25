<?php /* Smarty version Smarty-3.1.12, created on 2013-11-25 23:46:05
         compiled from "F:\website\laugh\admin\themes\blue\Column\newcolumn.html" */ ?>
<?php /*%%SmartyHeaderCode:14983529370bde17894-74253103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0073ff3804088861901c14477c394a6e386e66e' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Column\\newcolumn.html',
      1 => 1381938762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14983529370bde17894-74253103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'columnTree' => 0,
    'columnModelTree' => 0,
    'columnid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529370bded1df3_53253631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529370bded1df3_53253631')) {function content_529370bded1df3_53253631($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>添加新栏目</h5></div>
	<form name="newcolumnform" action="__APP__/index.php?s=Column/saveColumn" enctype="multipart/form-data" method="post" class="newform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>栏目内容</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>上级栏目: </span>
					<select name="parentid" style="width:230px;">
						<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

					</select>
				</li>
				<li class="formblock">
					<span>内容模型: </span>
					<select name="columnmodel" style="width:230px;">
						<?php echo $_smarty_tpl->tpl_vars['columnModelTree']->value;?>

					</select>
				</li>
				<li class="formblock">
					<span>栏目名称:</span>
					<input type="text" name="columnname" value="" class="input w200 ruler" />
				</li>
				<!-- <li class="formblock">
					<span>访问Action:</span>
					<input type="text" name="action" value="Index" class="input w200" />
					<font color="#999999">*如非必要请勿更改</font>
				</li> -->
				<li class="formblock">
					<span>排列顺序:</span>
					<input type="text" name="sortrank" value="" class="input w200" />
				</li>
				<li class="formautoblock">
					<span>栏目属性:</span>
					<div class="item_listh fleft">
						<label style="float:none;"><input type="radio" name="columntype" value="1" class="radio" />频道封面（栏目本身不允许发布文档） </label>
						<label style="float:none;"><input type="radio" name="columntype" value="2" class="radio" checked="checked" />最终列表栏目（允许在本栏目发布文档，并生成文档列表） </label>
						<label style="float:none;"><input type="radio" name="columntype" value="3" class="radio" />外部连接（在"文件保存目录"处填写网址） </label>
					</div>
				</li>
				<li class="formblock">
					<span>是否隐藏: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="isshow" value="1" class="radio" checked="checked" />显示</label>
						<label><input type="radio" name="isshow" value="0" class="radio" />隐藏</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>栏目封面页模板:</span>
					<input type="text" name="template_index" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>栏目列表页模板:</span>
					<input type="text" name="template_list" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>栏目文档详细页模板:</span>
					<input type="text" name="template_body" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="title" value="" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>栏目描述:</span>
					<textarea name="description" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>栏目内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"></textarea>
					</div>
				</li>
			</div>
			</div>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script type="text/javascript">
UE.getEditor('myEditor',{
});
$("form[name=newcolumnform]").submit(function(){
	var columnname = $(this).find("input[name=columnname]").val();
	if (!columnname) {
		alert("请填写栏目名称!");
		return false;
	}
	var columnmodel = $(this).find("select[name=columnmodel]").val();
	if (!columnmodel) {
		alert("请选择栏目模型!");
		return false;
	}
	var sortrank = $(this).find("input[name=sortrank]").val();
	if (!sortrank) {
		alert("请填写栏目排序位置!");
		return false;
	}
});
$("select[name=parentid]").find("option").each(function (){
	if ($(this).val()=="<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
") $(this).attr("selected",true);
});

//根据内容模型获取模型模板
$("select[name=columnmodel]").change(function (){
	var d = {
		columnmodel : $(this).val()
	}
	$.post(JS_APP+"/index.php?s=CTModel/getCTModelTemplate",d,function(data){
		$("input[name=template_index]").val(data.data['template_index']);
		$("input[name=template_list]").val(data.data['template_list']);
		$("input[name=template_body]").val(data.data['template_body']);
	},'json')
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>