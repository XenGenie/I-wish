<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 23:45:15
  from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/breadcrumb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5782c1ebb71ff3_85768214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4ed52227f8a1aaae0c60d98bd6d799043b4445' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/breadcrumb.tpl',
      1 => 1468139362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5782c1ebb71ff3_85768214 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb">
  <!-- <li><a href="/x" onclick="return false;" target="_blank"><i class="fa fa-globe"></i> www</a></li> -->
  <li ><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
" class="btn btn-sm btn-transparent"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?>
      <?php ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && "x".$_prefixVariable2 == $_smarty_tpl->tpl_vars['xtra']->value['class']) {?>
        <li class="btn btn-sm btn-transparent"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
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
          btn btn-sm btn-transparent"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
"></i>
        <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
        </a> 
        <?php if ($_smarty_tpl->tpl_vars['method']->value == 'index') {?> 
          </li>
        <?php } else { ?>
          <!-- <li class="active btn btn-sm btn-transparent"> -->
          <!--   <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" class=""> -->
          <!--     <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"> <?php echo ucfirst($_smarty_tpl->tpl_vars['method']->value);?>
</i> -->
          <!--   </a> -->
          <!-- </li> -->
        <?php }?>
        <li class="label label-transparent pull-right">
          <label class="badge 
            badge<?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>-primary<?php } else { ?>-transparent<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['xtra']->value['version'];?>
 
          </label>
         
        </li>
      <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ol>
<?php }
}
