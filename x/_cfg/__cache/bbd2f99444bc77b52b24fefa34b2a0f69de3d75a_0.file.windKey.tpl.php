<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-09 04:39:30
  from "/home/xopher/www/superdomx.com/x/X/xLogin/windKey.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_578063e2c3fa42_38021863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd2f99444bc77b52b24fefa34b2a0f69de3d75a' => 
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
function content_578063e2c3fa42_38021863 (Smarty_Internal_Template $_smarty_tpl) {
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
