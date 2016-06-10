<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-04 08:26:57
  from "/home/xopher/www/superdomx.com/x/html/templates/cfg.tinymce.templates.json" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_575274b1b31757_43733309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd611e8a4d50f47caa0c566530cca9df68bd1b258' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/templates/cfg.tinymce.templates.json',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../html/templates/jumbotron.tpl' => 1,
    'file:../../html/templates/3-col.tpl' => 1,
    'file:../../html/templates/cover.tpl' => 1,
    'file:../../html/templates/bs-grid.tpl' => 1,
  ),
),false)) {
function content_575274b1b31757_43733309 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_escape')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.escape.php';
?>
/* 
// <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:../../html/templates/jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('jumbotron', ob_get_clean());
?>

// <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:../../html/templates/3-col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('3col', ob_get_clean());
?>

// <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:../../html/templates/cover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('cover', ob_get_clean());
?>

// <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:../../html/templates/bs-grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('grid', ob_get_clean());
?>

// 
*/
templates: [
	{ "title" : "Jumbotron", "content": '<?php echo smarty_modifier_escape(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['jumbotron']->value), 'quote');?>
' },
	{ "title" : "3 Columns", "content": '<?php echo smarty_modifier_escape(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['3col']->value), 'quote');?>
' },
	{ "title" : "Cover", "content": '<?php echo smarty_modifier_escape(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['cover']->value), 'quote');?>
' },
	{ "title" : "Bootstrap Grid Examples", "content": '<?php echo smarty_modifier_escape(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['grid']->value), 'quote');?>
' }
]<?php }
}
