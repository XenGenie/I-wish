<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 11:39:43
  from "/home/xopher/www/superdomx.com/x/X/xThemes/featured.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_578217df042ed9_39649525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41da1c021183fa5a72c180723e61121692e03d27' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xThemes/featured.tpl',
      1 => 1468143579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578217df042ed9_39649525 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
?>
<div class="row">
  <div class="col-md-12">
    <ul class="row thumbnails">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li class="col-sm-4">
          <div class="thumbnail">
              <img src="img/10.jpg" alt="">
              <div class="caption">
                  <h4>
                    <?php echo smarty_modifier_replace(ucwords($_smarty_tpl->tpl_vars['v']->value),'_',' ');?>

                  </h4>
                  <p>
                    <strong>You will never know exactly how something will go until you try it.</strong> You can think three hundred times and still have no precise result... </p>
                  <p class="text-right">
                    <a href="#" class="btn btn-lg btn-success">
                      Install 
                    </a> 
                    <a href="#" class="btn btn-lg btn-info">
                      Preview
                    </a>
                  </p>
              </div>
          </div>
        </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
  </div>
</div>
<?php }
}
