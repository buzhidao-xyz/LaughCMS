<?php /* Smarty version Smarty-3.1.12, created on 2012-12-03 16:25:09
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\login.html" */ ?>
<?php /*%%SmartyHeaderCode:686550bc61e58299c8-52205837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'addbc7b7048ff14bf09e25d891ae3235ab0d57b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\login.html',
      1 => 1352423930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '686550bc61e58299c8-52205837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ecode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bc61e58a1671_19065077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bc61e58a1671_19065077')) {function content_50bc61e58a1671_19065077($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="login">
    <!-- login -->
    <div class="title">
        <h5>管理中心</h5>
        <div class="corner tl"></div>
        <div class="corner tr"></div>
    </div>
    <div class="messages">
        <?php if ($_smarty_tpl->tpl_vars['ecode']->value){?>
        <div id="message-error" class="message message-error">
            <div class="image">
                <img src="themes/smooth/images/icons/error.png" alt="Error" height="32" />
            </div>
            <div class="text" style="padding-top:20px;">
                <h6><?php echo $_smarty_tpl->tpl_vars['ecode']->value;?>
</h6>
            </div>
            <div class="dismiss">
                <a href="#message-error"></a>
            </div>
        </div>
        <?php }?>
    </div>
    <div class="inner">
        <form name="logform" method="post" action="__APP__/?s=login/loginCheck">
        <div class="form">
            <!-- fields -->
            <div class="fields">
                <div class="field">
                    <div class="label">
                        <label for="username">用户名:</label>
                    </div>
                    <div class="input">
                        <input type="text" id="username" name="username" size="40" value="" class="focus" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="password">密码:</label>
                    </div>
                    <div class="input">
                        <input type="password" id="password" name="password" size="40" value="" class="focus" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="password">验证码:</label>
                    </div>
                    <div class="input">
                        <input type="text" id="vcode" name="vcode" value="" class="focus" style="width:109px;" />&nbsp;<img src="__APP__/?s=vcode" class="vcode" />
                    </div>
                </div>
                <div class="buttons">
                    <input type="submit" value="登录" />
                </div>
            </div>
            <!-- end fields -->
        </div>
        </form>
    </div>
    <!-- end login -->
    <div id="colors-switcher" class="color">
        <a href="" class="blue" title="Blue"></a>
        <a href="" class="green" title="Green"></a>
        <a href="" class="brown" title="Brown"></a>
        <a href="" class="purple" title="Purple"></a>
        <a href="" class="red" title="Red"></a>
        <a href="" class="greyblue" title="GreyBlue"></a>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        style_path = "themes/smooth/style/colors";

        $("input.focus").focus(function () {
            if (this.value == this.defaultValue) {
                this.value = "";
            }
            else {
                this.select();
            }
        });

        $("input.focus").blur(function () {
            if ($.trim(this.value) == "") {
                this.value = (this.defaultValue ? this.defaultValue : "");
            }
        });

        $("input:submit, input:reset").button();
    });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>