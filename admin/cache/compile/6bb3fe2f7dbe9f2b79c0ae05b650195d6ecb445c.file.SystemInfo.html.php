<?php /* Smarty version Smarty-3.1.12, created on 2013-05-10 17:30:09
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\System\SystemInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:27214518cbe212fe387-92726252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb3fe2f7dbe9f2b79c0ae05b650195d6ecb445c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\System\\SystemInfo.html',
      1 => 1368177974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27214518cbe212fe387-92726252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518cbe2135e026_91528239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518cbe2135e026_91528239')) {function content_518cbe2135e026_91528239($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=System/systemInfo" class="opTopOn">系统参数设置</a> |
	<a href="__APP__/index.php?s=System/addSystemcfg">添加新变量</a>
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
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>网站地址:</span>
					<input type="text" name="host" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>网站名称:</span>
					<input type="text" name="sitename" value="" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>网站关键字:</span>
					<textarea name="keywords" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>管理中心目录:</span>
					<input type="text" name="admin_path" value="" class="input w300" />
				</li>
			</div>
			</div>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script type="text/javascript">
$(document).ready(function (){
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>