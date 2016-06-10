<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 08:05:52
  from "/home/xopher/www/superdomx.com/x/html/twilli_air/menu-items.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fccc01ad538_33998433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '692fafb8fe7234955ab0caaedcc98882d3a10afb' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/twilli_air/menu-items.tpl',
      1 => 1464847541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fccc01ad538_33998433 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
  <li id="menu-item-<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="menu-item scroll">
    <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['href'];?>
">
      <?php echo $_smarty_tpl->tpl_vars['i']->value['html'];?>

    </a>
  </li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
