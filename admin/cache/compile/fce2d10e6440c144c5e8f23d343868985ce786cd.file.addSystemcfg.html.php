<?php /* Smarty version Smarty-3.1.12, created on 2013-05-14 18:45:56
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\System\addSystemcfg.html" */ ?>
<?php /*%%SmartyHeaderCode:4995519215e4468726-35263016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce2d10e6440c144c5e8f23d343868985ce786cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\System\\addSystemcfg.html',
      1 => 1368519214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4995519215e4468726-35263016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_519215e44c22e9_46193547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519215e44c22e9_46193547')) {function content_519215e44c22e9_46193547($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=System/systemInfo">系统参数设置</a> |
	<a href="__APP__/index.php?s=System/addSystemcfg" class="opTopOn">添加新变量</a>
	<a href="__APP__/index.php?s=System/makeCacheConfig">生成配置缓存文件</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>添加新系统变量参数</h5></div>
	<form name="newform" action="__APP__/index.php?s=System/saveSystemcfg" method="post" class="newform" id="ajaxform">
		<ul class="formbody">
			<li class="formblock">
				<span>变量名称:</span>
				<input type="text" name="cfgname" value="" class="input w200" />
			</li>
			<li class="formblock">
				<span>变量值:</span>
				<input type="text" name="cfgvalue" value="" class="input w200" />
			</li>
			<li class="formblock">
				<span>参数说明:</span>
				<input type="text" name="cfginfo" value="" class="input w300" />
			</li>
			<li class="formblock">
				<span>变量类型:</span>
				<div class="item_list fleft">
					<label><input type="radio" name="cfgtype" value="string" class="radio" checked="checked" />文本</label>
					<label><input type="radio" name="cfgtype" value="number" class="radio" />数字</label>
					<label><input type="radio" name="cfgtype" value="boolean" class="radio" />布尔(Y/N)</label>
					<label><input type="radio" name="cfgtype" value="text" class="radio" />多行文本</label>
				</div>
			</li>
			<li class="formblock">
				<span>所属组:</span>
				<select name="cfggroupid" style="width:200px;">
					<option value="">--请选择--</option>
					<option value="1">站点设置</option>
					<option value="2">核心设置</option>
				</select>
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>