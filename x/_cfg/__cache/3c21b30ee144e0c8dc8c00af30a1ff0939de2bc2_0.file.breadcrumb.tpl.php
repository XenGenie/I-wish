<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-05 08:03:48
  from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/breadcrumb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577b4dc49034a2_15602772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c21b30ee144e0c8dc8c00af30a1ff0939de2bc2' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/breadcrumb.tpl',
      1 => 1467698559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577b4dc49034a2_15602772 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb">
  <!-- <li><a href="/x" onclick="return false;" target="_blank"><i class="fa fa-globe"></i> www</a></li> -->
  <li ><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
" class="btn btn-transparent"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?>
      <?php ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && "x".$_prefixVariable1 == $_smarty_tpl->tpl_vars['xtra']->value['class']) {?>
        <li class="btn btn-transparent"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
?anchor=<?php echo $_smarty_tpl->tpl_vars['xtra']->value['see'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['see'];?>
"></i>
        <?php echo ucfirst($_smarty_tpl->tpl_vars['admin_menu']->value[$_smarty_tpl->tpl_vars['xtra']->value['see']]['area']);?>
</a> 
        </li>
        <li class="
          <?php if ($_smarty_tpl->tpl_vars['method']->value == 'index') {?> 
            active
          <?php }?> 
          btn btn-transparent"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
"></i>
        <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
        <!-- <label class="badge  -->
        <!--   badge<?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>-primary<?php } else { ?>-transparent<?php }?>"> -->
        <!--   <?php echo $_smarty_tpl->tpl_vars['xtra']->value['version'];?>
  -->
        <!-- </label> -->
        <!-- : <?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
  -->
        </a> 
        <?php if ($_smarty_tpl->tpl_vars['method']->value == 'index') {?> 
        </li>
        <?php } else { ?>
            <li class="active btn btn-sm btn-transparent">
                <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" class=""><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"> <?php echo ucfirst($_smarty_tpl->tpl_vars['method']->value);?>
</i>
            </a>
        <?php }?>
      <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ol>
<?php }
}
