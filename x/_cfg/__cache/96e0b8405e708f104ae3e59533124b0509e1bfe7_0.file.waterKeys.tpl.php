<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-16 19:55:58
  from "/home/xopher/www/superdomx.com/x/X/xLogin/waterKeys.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5762e82e673e95_21056955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e0b8405e708f104ae3e59533124b0509e1bfe7' => 
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
function content_5762e82e673e95_21056955 (Smarty_Internal_Template $_smarty_tpl) {
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
