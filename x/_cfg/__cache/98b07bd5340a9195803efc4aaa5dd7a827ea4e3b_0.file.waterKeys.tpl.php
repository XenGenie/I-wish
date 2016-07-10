<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-09 04:39:29
  from "/home/xopher/www/superdomx.com/x/X/xLogin/waterKeys.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_578063e11c63a2_76255366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b07bd5340a9195803efc4aaa5dd7a827ea4e3b' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/waterKeys.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
  ),
),false)) {
function content_578063e11c63a2_76255366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="alert alert-info text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3><i class="fa fa-user-md fa-5x"></i><br/><strong>Wisdom to Heal</strong></h3>
	
	<div class="input-group">
	    <span class="input-group-btn">
	        <button class="btn btn-info active" type="button">
	             <i class="fa fa-heart "></i>
	        </button>
	    </span>
	    <input id="swipe_key" type="email"
	           data-trigger="change" required="required" 
	           class="form-control"
	           name="key[email]" value="">
	    <span class="input-group-btn">
	        <button class="btn btn-success" type="button" onclick="window.updateNexusServer(this);">
	            <i class="fa fa-envelope "></i>
	        </button>
	    </span>
	</div>
    <p>Grants a user the ability to edit and moderate content.</p>

</div><?php }
}
