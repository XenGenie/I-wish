<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-07 08:14:07
  from "/home/xopher/www/superdomx.com/x/html/~blox/data.table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5756662f33bd99_75169065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6c02d07b847efe226ea61502daefe9aa621334b' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/data.table.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5756662f33bd99_75169065 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="widget"> 
    <table id="shop-items" class="table table-striped dataTable no-footer"  width="100%">
        <thead>
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <th><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</th>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tr>
        </thead> 
        <tfoot>
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <th><?php echo ucwords(str_replace($_smarty_tpl->tpl_vars['value']->value,'_',' '));?>
</th>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tr>
        </tfoot>
    </table>
    <?php echo '<script'; ?>
 type="text/javascript"> 
        $(document).ready(function() {
            $('#shop-items').dataTable( {
                // "processing": true,
                // "serverSide": true,
                // "autoload" : true,
                "sDom": "<'row table-top-control'<'col-md-6 hidden-xs per-page-selector'l><'col-md-6'f>r>t<'row table-bottom-control'<'col-md-6'i><'col-md-6'p>>",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ &nbsp; records per page"
                },
                "ajax": "/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/.json"
            }); 
        }); 
    <?php echo '</script'; ?>
>
</section><?php }
}
