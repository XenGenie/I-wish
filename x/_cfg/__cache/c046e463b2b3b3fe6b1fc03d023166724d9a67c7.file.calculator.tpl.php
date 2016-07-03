<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-31 00:46:50
         compiled from "/home/xopher/www/superdomx.com/x/X/xShipping/calculator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1643041050574cc2dab3bc29-17495007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c046e463b2b3b3fe6b1fc03d023166724d9a67c7' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShipping/calculator.tpl',
      1 => 1448770352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1643041050574cc2dab3bc29-17495007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cc2dabbe397_19197696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cc2dabbe397_19197696')) {function content_574cc2dabbe397_19197696($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="<?php if (!$_smarty_tpl->tpl_vars['i']->value['col']) {?>col-sm-12<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['i']->value['col'];?>
<?php }?> widget">
// Rates for sending a <?php echo $_smarty_tpl->tpl_vars['data']->value['config'][$_smarty_tpl->getVariable('smarty')->value['section']['weight']['index']];?>
 ".$config[weight_units].", ".$config[size_length]." x ".$config[size_width]." x ".$config[size_height]." <?php echo $_smarty_tpl->tpl_vars['data']->value['config'][$_smarty_tpl->getVariable('smarty')->value['section']['size_units']['index']];?>
 package from ".$config[from_zip]." to ".$config[to_zip].":
	<xmp>
	<?php echo print_r($_smarty_tpl->tpl_vars['data']->value['rates']);?>

	</xmp>
</div><?php }} ?>
