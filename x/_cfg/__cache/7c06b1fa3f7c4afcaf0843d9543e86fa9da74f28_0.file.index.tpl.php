<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 21:10:47
  from "/home/xopher/www/superdomx.com/x/html/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57829db7da0503_81643020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c06b1fa3f7c4afcaf0843d9543e86fa9da74f28' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/index.tpl',
      1 => 1464760249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/".((string)$_smarty_tpl->tpl_vars[\'LAYOUT\']->value)."/x.nav.tpl' => 1,
    'file:layout/sidedoor/frame.tpl' => 1,
    'file:layout/".((string)$_smarty_tpl->tpl_vars[\'LAYOUT\']->value)."/frame.tpl' => 1,
  ),
),false)) {
function content_57829db7da0503_81643020 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['_POST']->value['_pjax'])) {?><body><div class="content container" id="container" data-pjax-container><?php $_smarty_tpl->_subTemplateRender("file:layout/".((string)$_smarty_tpl->tpl_vars['LAYOUT']->value)."/x.nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:layout/sidedoor/frame.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div></body><?php } else {
$_smarty_tpl->_subTemplateRender("file:layout/".((string)$_smarty_tpl->tpl_vars['LAYOUT']->value)."/frame.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php }
}
