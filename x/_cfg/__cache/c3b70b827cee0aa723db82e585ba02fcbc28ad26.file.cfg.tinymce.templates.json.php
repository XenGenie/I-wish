<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-31 01:09:09
         compiled from "/home/xopher/www/superdomx.com/x/html/templates/cfg.tinymce.templates.json" */ ?>
<?php /*%%SmartyHeaderCode:1297230912574cc815d61c19-89799613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b70b827cee0aa723db82e585ba02fcbc28ad26' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/templates/cfg.tinymce.templates.json',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1297230912574cc815d61c19-89799613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jumbotron' => 0,
    '3col' => 0,
    'cover' => 0,
    'grid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cc815df8b78_25343340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cc815df8b78_25343340')) {function content_574cc815df8b78_25343340($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.escape.php';
?>/* 
// <?php $_smarty_tpl->tpl_vars['jumbotron'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../html/templates/jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

// <?php $_smarty_tpl->tpl_vars['3col'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../html/templates/3-col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

// <?php $_smarty_tpl->tpl_vars['cover'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../html/templates/cover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

// <?php $_smarty_tpl->tpl_vars['grid'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../html/templates/bs-grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

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
]<?php }} ?>
