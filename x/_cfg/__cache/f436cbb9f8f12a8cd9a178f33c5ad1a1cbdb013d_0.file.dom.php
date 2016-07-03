<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 07:56:54
  from "/home/xopher/www/superdomx.com/x/html/dom" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fcaa63b2578_48054091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f436cbb9f8f12a8cd9a178f33c5ad1a1cbdb013d' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/dom',
      1 => 1457852352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:eval' => 3,
  ),
),false)) {
function content_574fcaa63b2578_48054091 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_google_sheet')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.google_sheet.php';
if (!is_callable('smarty_function_dom')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.dom.php';
$_smarty_tpl->_assignInScope('noendtags', array('input','br','hr','meta','link','img'));
$_smarty_tpl->_assignInScope('ignoreattrs', array('children','html','div','data','tpl','var'));
if ($_smarty_tpl->tpl_vars['dom']->value['div']) {?>
  <<?php echo $_smarty_tpl->tpl_vars['dom']->value['div'];?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dom']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['k']->value == 'id' && $_smarty_tpl->tpl_vars['k']->value != "HTML") {?>
        <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
="<?php $_smarty_tpl->_subTemplateRender("file:eval", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('v'=>((string)$_smarty_tpl->tpl_vars['v']->value)), 0, true);
?>
"
      <?php } elseif ($_smarty_tpl->tpl_vars['v']->value && !in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['ignoreattrs']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
="<?php $_smarty_tpl->_subTemplateRender("file:eval", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('v'=>$_smarty_tpl->tpl_vars['v']->value), 0, true);
?>
"
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php $_smarty_tpl->_assignInScope('endtag', in_array($_smarty_tpl->tpl_vars['dom']->value['div'],$_smarty_tpl->tpl_vars['noendtags']->value) ? false : true);
?>
  <?php if (!$_smarty_tpl->tpl_vars['endtag']->value) {?>/<?php }?>>
<?php }?>
    <?php $_smarty_tpl->_subTemplateRender("file:eval", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('v'=>$_smarty_tpl->tpl_vars['dom']->value['html']), 0, true);
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['dom']->value['children'])) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",$_smarty_tpl->tpl_vars['dom']->value['children']), 'child', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['child']->value) {
?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['children']) ? $_smarty_tpl->tpl_vars['children']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[trim($_smarty_tpl->tpl_vars['child']->value)] = $_smarty_tpl->tpl_vars['parent']->value[trim($_smarty_tpl->tpl_vars['child']->value)];
$_smarty_tpl->_assignInScope('children', $_tmp_array);
?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['dom']->value['tpl'])) {?>
    <!--   Include Files <?php echo $_smarty_tpl->tpl_vars['dom']->value['tpl'];?>
 -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",$_smarty_tpl->tpl_vars['dom']->value['tpl']), 'tpl', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tpl']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['dom']->value['data'] != '') {?>
          <?php ob_start();
echo substr(md5(time()),-6);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('now', "tmp_".$_prefixVariable1);
?>
          <?php echo smarty_function_google_sheet(array('read'=>$_smarty_tpl->tpl_vars['dom']->value['data'],'var'=>"_".((string)$_smarty_tpl->tpl_vars['now']->value),'full_sheet'=>true),$_smarty_tpl);?>

          <?php $_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['_'.($_smarty_tpl->tpl_vars['now']->value)]->value);
?>
          <?php $_smarty_tpl->_assignInScope(''.($_smarty_tpl->tpl_vars['dom']->value['var']), $_smarty_tpl->tpl_vars['x']->value);
?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tpl']->value == 'dom') {?>
          <?php echo smarty_function_dom(array('x'=>$_smarty_tpl->tpl_vars['x']->value,'y'=>'HTML'),$_smarty_tpl);?>

        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['dom']->value['children'])) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",$_smarty_tpl->tpl_vars['dom']->value['children']), 'child', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['child']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['child']->value != '') {?>
          <?php $_smarty_tpl->_assignInScope('child', trim($_smarty_tpl->tpl_vars['child']->value));
?>
          <?php echo smarty_function_dom(array('x'=>$_smarty_tpl->tpl_vars['parent']->value,'y'=>$_smarty_tpl->tpl_vars['child']->value),$_smarty_tpl);?>

        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }
if ($_smarty_tpl->tpl_vars['dom']->value['div'] && $_smarty_tpl->tpl_vars['endtag']->value) {?>
</<?php echo $_smarty_tpl->tpl_vars['dom']->value['div'];?>
>
<?php }
}
}
