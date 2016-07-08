<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 05:56:45
  from "/home/xopher/www/superdomx.com/x/X/xBlox/topX.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f247d838156_75314518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8808ece17308203bb2f0fb4ff1054316e0ed081e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBlox/topX.tpl',
      1 => 1448770332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577f247d838156_75314518 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list-group">   
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qBlox']->value, 'blox', false, 'q');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['q']->value => $_smarty_tpl->tpl_vars['blox']->value) {
?> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blox']->value, 'x', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['x']->value) {
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
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
</div><?php }
}
