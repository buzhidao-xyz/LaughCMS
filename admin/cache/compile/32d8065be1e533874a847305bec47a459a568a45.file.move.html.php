<?php /* Smarty version Smarty-3.1.12, created on 2013-03-28 16:34:10
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Article\move.html" */ ?>
<?php /*%%SmartyHeaderCode:2725151540082326317-22714162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2725151540082326317-22714162',
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
  'unifunc' => 'content_5154008236b640_77567308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5154008236b640_77567308')) {function content_5154008236b640_77567308($_smarty_tpl) {?><div class="box">
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