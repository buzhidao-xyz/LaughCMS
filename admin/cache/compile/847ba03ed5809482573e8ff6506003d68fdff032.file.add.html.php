<?php /* Smarty version Smarty-3.1.12, created on 2013-04-02 15:03:04
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Product\add.html" */ ?>
<?php /*%%SmartyHeaderCode:25118515a82a8272629-67491001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '847ba03ed5809482573e8ff6506003d68fdff032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Product\\add.html',
      1 => 1364782744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25118515a82a8272629-67491001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'columnTree' => 0,
    'userInfo' => 0,
    'timestamp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515a82a8302ce1_91862477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515a82a8302ce1_91862477')) {function content_515a82a8302ce1_91862477($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>添加新产品</h5></div>
	<form name="newform" action="__APP__/index.php?s=Product/save" enctype="multipart/form-data" method="post" class="newform">
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
					<input type="text" name="title" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

					</select>
				</li>
				<li class="formblock">
					<span>文档缩略图:</span>
					<input type="file" name="image" value="" class="input w150 inputfile" />
				</li>
				<li class="formblock">
					<span>文档来源:</span>
					<input type="text" name="source" value="" class="input w200" />
				</li>
				<li class="formblock">
					<span>作者:</span>
					<input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
" class="input w150" />
				</li>
				<li class="formblock">
					<span>发布时间:</span>
					<input type="text" id="dpicker0" name="publishtime" value="<?php echo mkdate($_smarty_tpl->tpl_vars['timestamp']->value);?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>是否允许评论: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="status" value="1" class="radio" checked="checked" />允许</label>
						<label><input type="radio" name="status" value="0" class="radio" />禁止</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="seotitle" value="" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>型号:</span>
					<input type="text" name="model" value="" class="input w150" />
				</li>
				<li class="formblock">
					<span>品牌:</span>
					<input type="text" name="brand" value="" class="input w200" />
				</li>
				<li class="formblock">
					<span>颜色:</span>
					<input type="text" name="color" value="" class="input w200" />
					多种颜色逗号,隔开
				</li>
				<li class="formblock">
					<span>材质:</span>
					<input type="text" name="material" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>尺寸:</span>
					<input type="text" name="size" value="" class="input w100" />
				</li>
				<li class="formblock">
					<span>价格:</span>
					<input type="text" name="price" value="" class="input w150" />
				</li>
				<li class="formblock">
					<span>数量:</span>
					<input type="text" name="total" value="" class="input w200" />
				</li>
			</div>
			<div class="shtabcontent">
				<?php echo $_smarty_tpl->getSubTemplate ("public/imageUpload.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>详细描述:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"></textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function (){
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
})
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>