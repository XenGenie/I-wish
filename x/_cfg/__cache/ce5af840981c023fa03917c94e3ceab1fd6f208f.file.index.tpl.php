<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 07:06:53
         compiled from "/home/xopher/www/superdomx.com/x/X/xBlog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2086751978565a95fde3fb33-59509097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce5af840981c023fa03917c94e3ceab1fd6f208f' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBlog/index.tpl',
      1 => 1448770331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2086751978565a95fde3fb33-59509097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'atBackDoor' => 0,
    'list' => 0,
    'toBackDoor' => 0,
    'Xtra' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a95fdf0f7c3_93099257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a95fdf0f7c3_93099257')) {function content_565a95fdf0f7c3_93099257($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['atBackDoor']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
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
	<?php } ?> 
<?php }?><?php }} ?>
