<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 10:48:40
  from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/x.nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57820be83ffe61_26082327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f85bf3647af068826aa9afa3ac927138c2b16c5f' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/x.nav.tpl',
      1 => 1467940927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./breadcrumb.tpl' => 1,
  ),
),false)) {
function content_57820be83ffe61_26082327 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
    <?php ob_start();
echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('php', "x".$_prefixVariable2.".php");
?>
    <head><title><?php echo $_smarty_tpl->tpl_vars['xtras']->value[$_smarty_tpl->tpl_vars['php']->value]['name'];?>
 : <?php echo $_smarty_tpl->tpl_vars['xtras']->value[$_smarty_tpl->tpl_vars['php']->value]['desc'];?>
 | Super Dom</title></head>
    <div class="row"> 
        <div class="col-md-12">
        <!-- <h2 class="page-title"><?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
 <span class="fw-semi-bold"><?php echo $_smarty_tpl->tpl_vars['method']->value;?>
</span></h2> -->
          <?php $_smarty_tpl->_subTemplateRender("file:./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
<?php }
}
}
