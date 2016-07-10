<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-09 04:39:32
  from "/home/xopher/www/superdomx.com/x/X/xLogin/fireKey.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_578063e418c969_57249508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d8619f9e1f9d69358518d85e9885950dc31776' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/fireKey.tpl',
      1 => 1448770344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578063e418c969_57249508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-danger text-align-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3><i class="fa fa-fire fa-5x"></i><br/><strong>Fire Power</strong></h3>
	<div class="input-group">
	    <span class="input-group-btn">
	        <button class="btn btn-danger active" type="button">
	            <i class="fa fa-fire "></i>
	        </button>
	    </span>
	    <input id="swipe_key" type="email"
	           data-trigger="change" required="required" 
	           class="form-control"
	           name="key[email]" value="">
	    <span class="input-group-btn">
	        <button class="btn btn-warning" type="button" onclick="window.updateNexusServer(this);">
	             <i class="fa fa-envelope "></i>
	        </button>
	    </span>
	</div>
    <p>Grants user the ability to delete content & ban users.</p>
</div>


<?php }
}
