<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-01 07:52:48
         compiled from "x/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:731189592565a790867f792-72539737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77489468afecf81589e22c7c3832c0805c6b6b23' => 
    array (
      0 => 'x/html/index.tpl',
      1 => 1464760249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '731189592565a790867f792-72539737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a79086b4006_94141210',
  'variables' => 
  array (
    '_POST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a79086b4006_94141210')) {function content_565a79086b4006_94141210($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['_POST']->value['_pjax'])) {?><body><div class="content container" id="container" data-pjax-container><?php echo $_smarty_tpl->getSubTemplate ("layout/".((string)$_smarty_tpl->tpl_vars['LAYOUT']->value)."/x.nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("layout/sidedoor/frame.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></body><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("layout/".((string)$_smarty_tpl->tpl_vars['LAYOUT']->value)."/frame.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }} ?>
