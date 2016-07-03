<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-16 19:45:48
  from "/home/xopher/www/superdomx.com/x/X/xUsers/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5762e5cc25a031_45574278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d0410a34c69855bfc4298ed4343070717f8b47' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xUsers/index.tpl',
      1 => 1466098183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
  ),
),false)) {
function content_5762e5cc25a031_45574278 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?> 
  <?php $_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>3), 0, false);
?>

<?php }
}
}
