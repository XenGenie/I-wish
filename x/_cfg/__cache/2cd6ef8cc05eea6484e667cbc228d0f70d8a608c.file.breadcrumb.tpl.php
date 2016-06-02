<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-01 08:06:37
         compiled from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1154735743574ca711a80694-38355774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd6ef8cc05eea6484e667cbc228d0f70d8a608c' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/breadcrumb.tpl',
      1 => 1464761180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1154735743574ca711a80694-38355774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574ca711ae9096_62472356',
  'variables' => 
  array (
    'toBackDoor' => 0,
    'xtras' => 0,
    'xtra' => 0,
    'Xtra' => 0,
    'admin_menu' => 0,
    'method' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574ca711ae9096_62472356')) {function content_574ca711ae9096_62472356($_smarty_tpl) {?><ol class="breadcrumb">
  <!-- <li><a href="/x" onclick="return false;" target="_blank"><i class="fa fa-globe"></i> www</a></li> -->
  <li><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
"><i class="fa fa-eye"></i> Master Tower</a></li>
  <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?>
      <?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&"x".$_tmp1==$_smarty_tpl->tpl_vars['xtra']->value['class']) {?>
        <li><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['see'];?>
/"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['see'];?>
"></i>
        <?php echo ucfirst($_smarty_tpl->tpl_vars['admin_menu']->value[$_smarty_tpl->tpl_vars['xtra']->value['see']]['area']);?>
</a> 
        </li>
        <li class="active"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
"></i>
        <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
        <!-- <label class="badge  -->
        <!--   badge<?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>-primary<?php } else { ?>-default<?php }?>"> -->
        <!--   <?php echo $_smarty_tpl->tpl_vars['xtra']->value['version'];?>
  -->
        <!-- </label> -->
        <!-- : <?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
  -->
        </a> 
        <?php if ($_smarty_tpl->tpl_vars['method']->value=='index') {?> 
        </li>
        <?php } else { ?>
            <li class="active">
                <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"> <?php echo ucfirst($_smarty_tpl->tpl_vars['method']->value);?>
</i>
            </a>
        <?php }?>
      <?php }?>
  <?php } ?>
</ol>
<?php }} ?>
