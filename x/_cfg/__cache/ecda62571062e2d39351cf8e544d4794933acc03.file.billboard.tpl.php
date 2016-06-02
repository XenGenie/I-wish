<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-02 06:10:45
         compiled from "x/html/~widgets/billboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1085571659565a95fdf13158-11757781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecda62571062e2d39351cf8e544d4794933acc03' => 
    array (
      0 => 'x/html/~widgets/billboard.tpl',
      1 => 1464840641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1085571659565a95fdf13158-11757781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a95fe0ac870_91806616',
  'variables' => 
  array (
    'size' => 0,
    'Xtra' => 0,
    'method' => 0,
    'XTRA' => 0,
    'LANG' => 0,
    'btn' => 0,
    'b' => 0,
    'toBackDoor' => 0,
    'qBlox' => 0,
    'q' => 0,
    'blox' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a95fe0ac870_91806616')) {function content_565a95fe0ac870_91806616($_smarty_tpl) {?><div class="row">
  <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['size']->value) {?><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
<?php } else { ?>12<?php }?>"> 
    <section class="widget">
      <div class="jumbotron">
        <h1>
          <?php ob_start();?><?php echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA'] = new Smarty_variable("X".$_tmp1, null, 0);?>
          <?php if ($_smarty_tpl->tpl_vars['method']->value=='index') {?>
            <!-- <i class="fa <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['ICON'];?>
 fa-3x pull-right"></i>  -->
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['HEAD'];?>

          <?php } else { ?>
            <!-- <i class="fa <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['ICON'];?>
 fa-3x pull-right"></i>  -->
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['JUMBO']['HEAD'];?>

          <?php }?>
        </h1>
        <blockquote>
                <?php if ($_smarty_tpl->tpl_vars['method']->value=='index') {?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['QUOTE'];?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['JUMBO']['QUOTE'];?>

          <?php }?> 
        </blockquote>
        <?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['BTN']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
            <a class="btn btn-lg <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['method']->value==$_smarty_tpl->tpl_vars['b']->value) {?>active<?php }?>"   href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['btn']->value['a'];?>

            </a>
        <?php } ?>
      </div>
    </section>
  </div>

  <?php  $_smarty_tpl->tpl_vars['blox'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blox']->_loop = false;
 $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['qBlox']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blox']->key => $_smarty_tpl->tpl_vars['blox']->value) {
$_smarty_tpl->tpl_vars['blox']->_loop = true;
 $_smarty_tpl->tpl_vars['q']->value = $_smarty_tpl->tpl_vars['blox']->key;
?> 
    <?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['q']->value=="x".$_tmp2) {?>
      <?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blox']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->value = $_smarty_tpl->tpl_vars['x']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['x']->value['backdoor']) {?>
          <?php if (!$_smarty_tpl->tpl_vars['x']->value['col']) {?>
            <?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable(6, null, 0);?>
          <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable($_smarty_tpl->tpl_vars['x']->value['col'], null, 0);?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['method']->value!='index'&&$_smarty_tpl->tpl_vars['x']->value['filter']==$_smarty_tpl->tpl_vars['method']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('method'=>((string)$_smarty_tpl->tpl_vars['b']->value),'title'=>$_smarty_tpl->tpl_vars['x']->value['blox']), 0);?>

          <?php } elseif ($_smarty_tpl->tpl_vars['method']->value=='index') {?>
            <?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('method'=>((string)$_smarty_tpl->tpl_vars['b']->value),'title'=>$_smarty_tpl->tpl_vars['x']->value['blox']), 0);?>

          <?php }?>
        <?php }?>
      <?php } ?>
    <?php }?>
  <?php } ?>
</div>

<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>
<?php }} ?>
