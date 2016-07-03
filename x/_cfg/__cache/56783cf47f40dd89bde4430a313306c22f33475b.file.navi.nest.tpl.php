<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-31 01:07:40
         compiled from "/home/xopher/www/superdomx.com/x/X/xNavigation/navi.nest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124956688574cc7bc751a99-81894289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56783cf47f40dd89bde4430a313306c22f33475b' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xNavigation/navi.nest.tpl',
      1 => 1448770346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124956688574cc7bc751a99-81894289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navi' => 0,
    'l' => 0,
    'link' => 0,
    'linktothe' => 0,
    'sub' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cc7bc847453_68670619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cc7bc847453_68670619')) {function content_574cc7bc847453_68670619($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
    <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
       <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value['id'], null, 0);?>
    <?php }?>
<?php } ?>  

<?php if ($_smarty_tpl->tpl_vars['linktothe']->value=='') {?>
    <?php $_smarty_tpl->tpl_vars['linktothe'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['link']->value['title']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['linktothe'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['linktothe']->value)."/".((string)$_smarty_tpl->tpl_vars['link']->value['title']), null, 0);?>

<?php }?>

<li class="span2 dropdown<?php if ($_smarty_tpl->tpl_vars['sub']->value&&$_smarty_tpl->tpl_vars['children']->value>0) {?>-rightsubmenu<?php }?>"><a class="dropdown-toggle" <?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?> data-toggle="dropdown"<?php }?> href="<?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?>/<?php } else { ?>/<?php echo $_smarty_tpl->tpl_vars['linktothe']->value;?>
<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
  <?php if (!$_smarty_tpl->tpl_vars['sub']->value&&$_smarty_tpl->tpl_vars['children']->value>0) {?>   <b class="caret"></b><?php }?></a>
<?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
        <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
           <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value['id'], null, 0);?>
        <?php }?>
    <?php } ?> 
    <?php if ($_smarty_tpl->tpl_vars['children']->value>0) {?>  
        <ul class="dropdown-menu">
            

            <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
                <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
                   <?php echo $_smarty_tpl->getSubTemplate ("./navi.nest.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('linktothe'=>$_smarty_tpl->tpl_vars['linktothe']->value,'link'=>$_smarty_tpl->tpl_vars['l']->value,'sub'=>true), 0);?>

                <?php }?>
            <?php } ?>
        </ul> 
    <?php }?>
</li> 
<?php }} ?>
