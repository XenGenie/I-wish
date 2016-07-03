<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-04 03:57:10
  from "/home/xopher/www/superdomx.com/x/X/xShop/widget.stat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57523576825572_54966358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954cfc8ed6bf2f052f4f9e1335c38464084e57cc' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/widget.stat.tpl',
      1 => 1448770360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57523576825572_54966358 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="<?php if ($_smarty_tpl->tpl_vars['w_col']->value != '') {
echo $_smarty_tpl->tpl_vars['w_col']->value;
} else { ?>col-md-3 col-sm-4 col-xs-6<?php }?>">
	<div class="widget text-center">
	    <div class="description">
	        <strong><?php echo $_smarty_tpl->tpl_vars['w_title']->value;?>
</strong>
	    </div>
	    <h1 class="icon">
	        <i class="fa <?php echo $_smarty_tpl->tpl_vars['w_icon']->value;?>
"></i>  <strong><?php echo $_smarty_tpl->tpl_vars['w_stat']->value;?>
</strong>
	    </h1>
	</div>       
</div><?php }
}
