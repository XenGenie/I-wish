<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 07:08:13
         compiled from "/home/xopher/www/superdomx.com/x/X/xBlox/topX.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177361137565a964d51b356-31559910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a00914bda5d64a0982a3168f2397fe716a2abd4b' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBlox/topX.tpl',
      1 => 1448770332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177361137565a964d51b356-31559910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'qBlox' => 0,
    'blox' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a964d564d84_42941445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a964d564d84_42941445')) {function content_565a964d564d84_42941445($_smarty_tpl) {?><div class="list-group">   
    <?php  $_smarty_tpl->tpl_vars['blox'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blox']->_loop = false;
 $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['qBlox']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blox']->key => $_smarty_tpl->tpl_vars['blox']->value) {
$_smarty_tpl->tpl_vars['blox']->_loop = true;
 $_smarty_tpl->tpl_vars['q']->value = $_smarty_tpl->tpl_vars['blox']->key;
?> 
        <?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blox']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->value = $_smarty_tpl->tpl_vars['x']->key;
?> 
            <?php if (!$_smarty_tpl->tpl_vars['x']->value['backdoor']) {?>
            <a href="#" class="list-group-item alert alert-default ">
                <button type="button" class="close"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['x']->value['icon'];?>
"></i> </button> 
                <strong><?php echo $_smarty_tpl->tpl_vars['x']->value['blox'];?>
</strong> <br/>
                <?php echo $_smarty_tpl->tpl_vars['x']->value['desc'];?>

            </a>
            <?php }?> 
        <?php } ?>
    <?php } ?> 
</div><?php }} ?>
