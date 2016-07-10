<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-09 08:27:05
  from "/home/xopher/www/superdomx.com/x/html/frontdoor/portal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5780993944fa46_92785617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4724d75ab4dd1c84b9d96bc638de172ae4478ba7' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/frontdoor/portal.tpl',
      1 => 1468045621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780993944fa46_92785617 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_fetch')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.fetch.php';
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBlox']->value, 'o', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['o']->value) {
?>
    <?php ob_start();
echo smarty_modifier_replace(strtolower(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('go', $_prefixVariable1);
?>
    <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
      <div id="o-blox-<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
-<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" icon="<?php echo $_smarty_tpl->tpl_vars['o']->value['icon'];?>
" blox="<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
" bloxid="<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" class="blox-panel" style="display: none;" >
        <i class="fa fa-5x fa-spinner fa-spin"></i>
      </div> 
      <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
          $('#o-blox-<?php echo $_smarty_tpl->tpl_vars['o']->value['blox'];?>
-<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
').load('/html/<?php echo smarty_modifier_replace(strtolower(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');?>
', function  () {
          });
          
          fadeInElements($('.blox-panel'), executeAfterFade);
        });
      <?php echo '</script'; ?>
>
    <?php } else { ?>
       
      <?php ob_start();
echo smarty_modifier_replace(lcfirst(substr($_smarty_tpl->tpl_vars['o']->value['blox'],1)),'-','/');
$_prefixVariable2=ob_get_clean();
echo smarty_function_fetch(array('file'=>"http://".((string)$_smarty_tpl->tpl_vars['HTTP_HOST']->value)."/html/".$_prefixVariable2."/".((string)$_smarty_tpl->tpl_vars['o']->value['id'])),$_smarty_tpl);?>
 
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['admin']) {?>
  <?php }
}
}
