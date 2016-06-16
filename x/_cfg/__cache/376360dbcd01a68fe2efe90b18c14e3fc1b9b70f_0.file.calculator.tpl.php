<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-10 08:58:53
  from "/home/xopher/www/superdomx.com/x/X/xShipping/calculator.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_575a652d740368_74667017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '376360dbcd01a68fe2efe90b18c14e3fc1b9b70f' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShipping/calculator.tpl',
      1 => 1448770352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
  ),
),false)) {
function content_575a652d740368_74667017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="<?php if (!$_smarty_tpl->tpl_vars['i']->value['col']) {?>col-sm-12<?php } else {
echo $_smarty_tpl->tpl_vars['i']->value['col'];
}?> widget">
// Rates for sending a <?php echo $_smarty_tpl->tpl_vars['data']->value['config'][(isset($_smarty_tpl->tpl_vars['__smarty_section_weight']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_weight']->value['index'] : null)];?>
 ".$config[weight_units].", ".$config[size_length]." x ".$config[size_width]." x ".$config[size_height]." <?php echo $_smarty_tpl->tpl_vars['data']->value['config'][(isset($_smarty_tpl->tpl_vars['__smarty_section_size_units']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_size_units']->value['index'] : null)];?>
 package from ".$config[from_zip]." to ".$config[to_zip].":
	<xmp>
	<?php echo print_r($_smarty_tpl->tpl_vars['data']->value['rates']);?>

	</xmp>
</div><?php }
}
