<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:42:45
  from "/home/xopher/www/superdomx.com/x/X/xLogin/earthKey.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c155d312a9_01834925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ae3d8202b4afce47b02d87ed36b8c3b4192fc4' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/earthKey.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5782c155d312a9_01834925 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-success text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3><i class="fa fa-leaf fa-5x"></i><br/><strong>Strength to Grow</strong></h3>
	<div class="input-group">
	    <span class="input-group-btn">
	        <button class="btn btn-success active" type="button">
	           <i class="fa fa-leaf "></i>
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
    <p>Grant users the ability to manage space & upload large files</p>
</div><?php }
}
