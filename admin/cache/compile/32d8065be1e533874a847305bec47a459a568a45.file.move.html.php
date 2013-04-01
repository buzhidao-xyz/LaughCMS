<?php /* Smarty version Smarty-3.1.12, created on 2013-04-01 11:41:37
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Article\move.html" */ ?>
<?php /*%%SmartyHeaderCode:17966515901f10bf539-15222666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d8065be1e533874a847305bec47a459a568a45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Article\\move.html',
      1 => 1364459641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17966515901f10bf539-15222666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ArchiveID' => 0,
    'columnTree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515901f112caf3_92494601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515901f112caf3_92494601')) {function content_515901f112caf3_92494601($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>移动文档栏目</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Article/moveArticle&action=save" method="post" id="ajaxform">
	<ul>
		<li>
			<span>文档ID:</span>
			<input type="text" name="articleid" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveID']->value;?>
" class="input w200" /> (','号分开)
		</li>
		<li>
			<span>目标栏目: </span>
			<select id="select" name="columnid" style="width:230px;">
				<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

			</select>
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>
<script type="text/javascript">

</script><?php }} ?>