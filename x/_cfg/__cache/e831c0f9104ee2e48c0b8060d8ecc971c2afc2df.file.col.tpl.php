<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 07:07:24
         compiled from "x/html/~widgets/col.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1200731433565a961ced9113-75401345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e831c0f9104ee2e48c0b8060d8ecc971c2afc2df' => 
    array (
      0 => 'x/html/~widgets/col.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1200731433565a961ced9113-75401345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'col' => 0,
    'offset' => 0,
    'title' => 0,
    'method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a961cef0684_98835433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a961cef0684_98835433')) {function content_565a961cef0684_98835433($_smarty_tpl) {?><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>col-md-offset-<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
<?php }?>">
	<?php echo $_smarty_tpl->getSubTemplate ("~widgets/jig.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value), 0);?>

</div><?php }} ?>
