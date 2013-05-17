<?php /* Smarty version Smarty-3.1.12, created on 2013-05-17 09:11:54
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\System\SystemInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:18094519583da82ac80-77300666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb3fe2f7dbe9f2b79c0ae05b650195d6ecb445c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\System\\SystemInfo.html',
      1 => 1368528491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18094519583da82ac80-77300666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'SystemInfo' => 0,
    'k' => 0,
    'd' => 0,
    'sinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_519583da9a9c36_47860729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519583da9a9c36_47860729')) {function content_519583da9a9c36_47860729($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=System/systemInfo" class="opTopOn">系统参数设置</a> |
	<a href="__APP__/index.php?s=System/addSystemcfg">添加新变量</a>
	<a href="__APP__/index.php?s=System/makeCacheConfig">生成配置缓存文件</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>系统参数设置</h5></div>
	<form name="newform" action="__APP__/index.php?s=System/saveSystemInfo" method="post" class="newform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>站点设置</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>核心设置</span></a></div>
			</div>
			<div class="shtabcontentc">
			<?php if (isset($_smarty_tpl->tpl_vars['SystemInfo']->value)&&is_array($_smarty_tpl->tpl_vars['SystemInfo']->value)&&!empty($_smarty_tpl->tpl_vars['SystemInfo']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SystemInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
			<div class="shtabcontent <?php if ($_smarty_tpl->tpl_vars['k']->value==1){?>shtabcontentcurrent<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['sinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sinfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sinfo']->key => $_smarty_tpl->tpl_vars['sinfo']->value){
$_smarty_tpl->tpl_vars['sinfo']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['sinfo']->value['cfgtype']=='string'){?>
					<li class="formblockauto">
						<span><?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfginfo'];?>
:</span>
						<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfgname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfgvalue'];?>
" class="input w350" />
					</li>
					<?php }elseif($_smarty_tpl->tpl_vars['sinfo']->value['cfgtype']=='number'){?>
					<li class="formblockauto">
						<span><?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfginfo'];?>
:</span>
						<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfgname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfgvalue'];?>
" class="input w350" />
					</li>
					<?php }elseif($_smarty_tpl->tpl_vars['sinfo']->value['cfgtype']=='boolean'){?>
					<li class="formblockauto">
						<span><?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfginfo'];?>
:</span>
						<div class="item_list fleft">
							<label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfgname'];?>
" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['sinfo']->value['cfgvalue']==1){?>checked="checked"<?php }?> />是</label>
							<label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfgname'];?>
" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['sinfo']->value['cfgvalue']==0){?>checked="checked"<?php }?> />否</label>
						</div>
					</li>
					<?php }elseif($_smarty_tpl->tpl_vars['sinfo']->value['cfgtype']=='text'){?>
					<li class="formblockauto">
						<span><?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfginfo'];?>
:</span>
						<textarea name="<?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfgname'];?>
" rows="4" cols="47"><?php echo $_smarty_tpl->tpl_vars['sinfo']->value['cfgvalue'];?>
</textarea>
					</li>
					<?php }?>
				<?php } ?>
			</div>
			<?php } ?>
			<?php }?>
			</div>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<style type="text/css">
ul.formbody li.formblockauto {
    border-bottom: 1px dashed #E1E1E1;
    height: auto;
    overflow: hidden;
    padding: 5px 0;
    width: auto;
}
ul.formbody li.formblockauto span {
	width: 300px;
    padding-top: 10px;
    text-indent: 0;
    padding-left: 30px;
    text-align: center;
}
</style>
<script type="text/javascript">
$(document).ready(function (){
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>