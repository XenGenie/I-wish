<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-03 08:12:34
  from "/home/xopher/www/superdomx.com/x/X/xLogin/windKey.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57511fd25fb2c3_15323062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd58269bb8e5d59305cd2da5301a50e7e2f01087c' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/windKey.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57511fd25fb2c3_15323062 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-default text-align-center">
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
</div><?php }
}
