<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-11 06:32:00
  from "/home/xopher/www/superdomx.com/x/html/~widgets/billboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5783214027cd97_84808813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ff977a7c7a100a8653829e6bd46ed586cebf28' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~widgets/billboard.tpl',
      1 => 1468210854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~blox/modal.tpl' => 1,
    'file:~widgets/col.tpl' => 2,
  ),
),false)) {
function content_5783214027cd97_84808813 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('XTRA', "X".$_prefixVariable1);
?>
<div class="row">
  <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['size']->value) {
echo $_smarty_tpl->tpl_vars['size']->value;
} else { ?>10<?php }?>"> 
    <section class="widget">
      <div class="jumbotron text-center">
        <h1>
          <?php if ($_smarty_tpl->tpl_vars['method']->value == 'index') {?>
            <!-- <i class="fa <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['ICON'];?>
 fa-3x pull-right"></i>  -->
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['HEAD'];?>

          <?php } else { ?>
            <!-- <i class="fa <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['ICON'];?>
 fa-3x pull-right"></i>  -->
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['JUMBO']['HEAD'];?>

          <?php }?>
        </h1>
        <p>
          <?php if ($_smarty_tpl->tpl_vars['method']->value == 'index') {?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['QUOTE'];?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['JUMBO']['QUOTE'];?>

          <?php }?> 
        </p>
      </div>
    </section>
  </div>
  <div class="col-md-2">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value]['JUMBO']['BTN'], 'btn', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['btn']->value) {
?>
            <a
              class="btn btn-lg btn-block <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
 <?php if ($_smarty_tpl->tpl_vars['method']->value == $_smarty_tpl->tpl_vars['b']->value) {?>active<?php }?> btn-xs-block"
              <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['modal'])) {?>
                data-toggle="modal" data-target="#modal-<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
"
              <?php } else { ?>
                href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
"
              <?php }?>
              >
              <?php echo $_smarty_tpl->tpl_vars['btn']->value['a'];?>

            </a>
            <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['modal'])) {?>
              <?php $_smarty_tpl->_subTemplateRender("file:~blox/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"modal-".((string)$_smarty_tpl->tpl_vars['b']->value),'ajax'=>((string)$_smarty_tpl->tpl_vars['Xtra']->value)."/".((string)$_smarty_tpl->tpl_vars['b']->value),'title'=>((string)$_smarty_tpl->tpl_vars['btn']->value['a']),'size'=>$_smarty_tpl->tpl_vars['btn']->value['modal'],'buttons'=>$_smarty_tpl->tpl_vars['btn']->value['buttons']), 0, true);
?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qBlox']->value, 'blox', false, 'q');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['q']->value => $_smarty_tpl->tpl_vars['blox']->value) {
?> 
    <?php ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['q']->value == "x".$_prefixVariable2) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blox']->value, 'x', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['x']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['x']->value['backdoor']) {?>
          <?php if (!$_smarty_tpl->tpl_vars['x']->value['col']) {?>
            <?php $_smarty_tpl->_assignInScope('col', 6);
?>
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('col', $_smarty_tpl->tpl_vars['x']->value['col']);
?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['method']->value != 'index' && $_smarty_tpl->tpl_vars['x']->value['filter'] == $_smarty_tpl->tpl_vars['method']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('method'=>((string)$_smarty_tpl->tpl_vars['b']->value),'title'=>$_smarty_tpl->tpl_vars['x']->value['blox']), 0, true);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['method']->value == 'index') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('method'=>((string)$_smarty_tpl->tpl_vars['b']->value),'title'=>$_smarty_tpl->tpl_vars['x']->value['blox']), 0, true);
?>

          <?php }?>
        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> <?php echo '</script'; ?>
>
<?php }
}
