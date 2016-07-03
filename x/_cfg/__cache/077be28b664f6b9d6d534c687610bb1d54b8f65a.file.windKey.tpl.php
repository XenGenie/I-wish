<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:40:39
         compiled from "/home/xopher/www/superdomx.com/x/X/xLogin/windKey.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1929412336571b26f7d84202-91903974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '077be28b664f6b9d6d534c687610bb1d54b8f65a' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/windKey.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1929412336571b26f7d84202-91903974',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b26f7e3fbe0_53893524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b26f7e3fbe0_53893524')) {function content_571b26f7e3fbe0_53893524($_smarty_tpl) {?><div class="alert alert-default text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3>
    	<i class="fa fa-flag fa-5x"></i><br/><strong>Intellect to Know</strong>
    </h3>
    <div class="input-group">
        <span class="input-group-btn">
            <button class="btn btn-default active" type="button">
               <i class="fa fa-flag "></i>
            </button>
        </span>
        <input id="swipe_key" type="email"
               data-trigger="change" required="required" 
               class="form-control"
               name="key[email]" value="">
        <span class="input-group-btn">
            <button class="btn btn-success" type="button" onclick="window.updateNexusServer(this);">
                <i class="fa fa-warning "></i>
            </button>
        </span>
    </div>
    <p>
        Grant users the ability create & landmark pages.
    </p>
</div><?php }} ?>
