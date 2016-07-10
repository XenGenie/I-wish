<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 10:39:26
  from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/ui_tabs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_578209be1c4505_99151323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8a2792c15d445baf8ec9df73d1810a468eddc74' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/ui_tabs.tpl',
      1 => 1468139904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578209be1c4505_99151323 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('XTRA', "X".$_prefixVariable1);
?>
<div class="row">
  <div class="col-md-12">
      <section class="widget widget-tabs">
          <header>
              <ul class="nav nav-tabs">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['tabs'], 'tab', false, 't', 'foo', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'];
?>
                  <li
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] : null)) {?>
                      class="active"
                    <?php }?>
                  >
                      <a href="#<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" data-toggle="tab"><?php echo ucwords($_smarty_tpl->tpl_vars['t']->value);?>
</a>
                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </ul>
          </header>
          <div class="body tab-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['tabs'], 'tab', false, 't', 'foo', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'];
?>
              <div id="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" class="tab-pane
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['first'] : null)) {?>
                  active
                <?php }?>
              ">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['t']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

              </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </div>
      </section>
  </div>
</div>
<?php }
}
