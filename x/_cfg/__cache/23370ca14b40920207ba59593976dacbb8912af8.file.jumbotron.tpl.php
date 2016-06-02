<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:37:16
         compiled from "/home/xopher/www/superdomx.com/x/X/xShop/jumbotron.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1806077063571b262c3238b3-31730943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23370ca14b40920207ba59593976dacbb8912af8' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/jumbotron.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1806077063571b262c3238b3-31730943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'btn' => 0,
    'toBackDoor' => 0,
    'Xtra' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b262c3ae100_60132348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b262c3ae100_60132348')) {function content_571b262c3ae100_60132348($_smarty_tpl) {?><div class="jumbotron">
    <div class="container">
            <h1>
                <i class="fa fa-shopping-cart fa-4x pull-left"></i>
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['XSHOP']['JUMBO']['HEAD'];?>

            </h1>
        <p>

            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['XSHOP']['JUMBO']['QUOTE'];?>

        </p>
        <?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANG']->value['XSHOP']['JUMBO']['BTN']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
        <a class="btn btn-lg <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['btn']->value['a'];?>

        </a>
        <?php } ?> 
    </div>
</div>  <?php }} ?>
