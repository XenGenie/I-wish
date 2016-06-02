<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 07:42:24
  from "/home/xopher/www/superdomx.com/x/html/~blox/godbar/navi.nest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fc740aef8c7_69331648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee6bc6b98184f668cd1050c65dab540886b216a' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/godbar/navi.nest.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navi.nest.tpl' => 1,
  ),
),false)) {
function content_574fc740aef8c7_69331648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('children', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navi']->value, 'l', false, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value => $_smarty_tpl->tpl_vars['l']->value) {
?> 
    <?php if ($_smarty_tpl->tpl_vars['l']->value['parent'] == $_smarty_tpl->tpl_vars['link']->value['id']) {?> 
       <?php $_smarty_tpl->_assignInScope('children', $_smarty_tpl->tpl_vars['link']->value['id']);
?>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  

<?php if ($_smarty_tpl->tpl_vars['linktothe']->value == '') {?>
    <?php $_smarty_tpl->_assignInScope('linktothe', ((string)$_smarty_tpl->tpl_vars['link']->value['title']));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('linktothe', ((string)$_smarty_tpl->tpl_vars['linktothe']->value)."/".((string)$_smarty_tpl->tpl_vars['link']->value['title']));
?>

<?php }?>

<li class="span2 dropdown<?php if ($_smarty_tpl->tpl_vars['sub']->value && $_smarty_tpl->tpl_vars['children']->value > 0) {?>-leftsubmenu<?php }?>">
    <a class="dropdown-toggle" <?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?> data-toggle="dropdown"<?php }?> href="<?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?>/<?php } else { ?>/<?php echo $_smarty_tpl->tpl_vars['linktothe']->value;
}?>"> <?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
  <?php if (!$_smarty_tpl->tpl_vars['sub']->value && $_smarty_tpl->tpl_vars['children']->value > 0) {?>   <b class="caret"></b><?php }?>
        <span class="label label-success pull-right">
            <i class="fa fa-hand-o-up"></i>
        </span>
        <span class="label label-info pull-right">
            <i class="fa fa-crosshairs"></i>
        </span>
    </a>
<?php $_smarty_tpl->_assignInScope('children', 0);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navi']->value, 'l', false, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value => $_smarty_tpl->tpl_vars['l']->value) {
?> 
        <?php if ($_smarty_tpl->tpl_vars['l']->value['parent'] == $_smarty_tpl->tpl_vars['link']->value['id']) {?> 
           <?php $_smarty_tpl->_assignInScope('children', $_smarty_tpl->tpl_vars['link']->value['id']);
?>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
    <?php if ($_smarty_tpl->tpl_vars['children']->value > 0) {?>  
        <ul class="dropdown-menu">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navi']->value, 'l', false, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value => $_smarty_tpl->tpl_vars['l']->value) {
?> 
                <?php if ($_smarty_tpl->tpl_vars['l']->value['parent'] == $_smarty_tpl->tpl_vars['link']->value['id']) {?> 
                   <?php $_smarty_tpl->_subTemplateRender("file:./navi.nest.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linktothe'=>$_smarty_tpl->tpl_vars['linktothe']->value,'link'=>$_smarty_tpl->tpl_vars['l']->value,'sub'=>true), 0, true);
?>

                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul> 
    <?php }?>
</li> 
<?php }
}
