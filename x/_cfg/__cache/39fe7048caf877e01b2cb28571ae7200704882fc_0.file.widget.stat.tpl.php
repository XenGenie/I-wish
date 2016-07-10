<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:43:11
  from "/home/xopher/www/superdomx.com/x/X/xShop/widget.stat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c16f6c2185_20083280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39fe7048caf877e01b2cb28571ae7200704882fc' => 
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
function content_5782c16f6c2185_20083280 (Smarty_Internal_Template $_smarty_tpl) {
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
