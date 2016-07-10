<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:43:12
  from "/home/xopher/www/superdomx.com/x/X/xShop/jumbotron.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c170122dd2_64242847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed0b2e3cedbdac767823ba0bb4096b1d57658f7' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/jumbotron.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5782c170122dd2_64242847 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jumbotron">
    <div class="container">
            <h1>
                <i class="fa fa-shopping-cart fa-4x pull-left"></i>
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['XSHOP']['JUMBO']['HEAD'];?>

            </h1>
        <p>

            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['XSHOP']['JUMBO']['QUOTE'];?>

        </p>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANG']->value['XSHOP']['JUMBO']['BTN'], 'btn', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['btn']->value) {
?>
        <a class="btn btn-lg <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['btn']->value['a'];?>

        </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
    </div>
</div>  <?php }
}
