<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 06:19:00
  from "/home/xopher/www/superdomx.com/x/X/xShop/widget.stat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f29b4e5b682_81552084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '784282d437e5b162dc70096b9789bef6e9b92f03' => 
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
function content_577f29b4e5b682_81552084 (Smarty_Internal_Template $_smarty_tpl) {
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
