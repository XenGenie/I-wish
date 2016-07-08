<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:48:46
  from "/home/xopher/www/superdomx.com/x/X/xBlog/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f067e27b6f4_65802973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe449abdd4b9502f74de5a087819a3d4b520230' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBlog/index.tpl',
      1 => 1448770331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
  ),
),false)) {
function content_577f067e27b6f4_65802973 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
if ($_smarty_tpl->tpl_vars['atBackDoor']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
		<fieldset>
			<legend><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/article/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/<?php echo urlencode($_smarty_tpl->tpl_vars['news']->value['title']);?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
 | <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></legend>
			<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value['content']),200);?>

			<a style="text-align: right;" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/article/<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['news']->value['title'],' ','_');?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
">Read More</a>
		</fieldset>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
<?php }
}
}
