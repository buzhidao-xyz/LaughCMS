<?php /* Smarty version Smarty-3.1.12, created on 2013-01-11 09:23:09
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Article\movearticle.html" */ ?>
<?php /*%%SmartyHeaderCode:2885550ef697dabd600-33792895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48cd0bf1c749189d59945707cda4cecfdcb20a66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Article\\movearticle.html',
      1 => 1357811062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2885550ef697dabd600-33792895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleid' => 0,
    'columnTree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ef697db06d66_91680062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ef697db06d66_91680062')) {function content_50ef697db06d66_91680062($_smarty_tpl) {?><div class="formContainer">
	<ul class="formbody" style="padding-top:10px;border:0;">
		<li class="formblock">
			<span>文档ID:</span>
			<input type="text" name="articleid" value="<?php echo $_smarty_tpl->tpl_vars['articleid']->value;?>
" class="input w200" /> (','号分开)
		</li>
		<li class="formblock">
			<span>目标栏目: </span>
			<select id="select" name="columnid" style="width:230px;">
				<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

			</select>
		</li>
	</ul>
</div>
<script type="text/javascript">

</script><?php }} ?>