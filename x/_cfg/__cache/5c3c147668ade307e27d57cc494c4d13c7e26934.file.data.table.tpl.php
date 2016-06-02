<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 10:47:53
         compiled from "x/html/~blox/data.table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1047092522574bfe3921aff3-65718959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c3c147668ade307e27d57cc494c4d13c7e26934' => 
    array (
      0 => 'x/html/~blox/data.table.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1047092522574bfe3921aff3-65718959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
    'toBackDoor' => 0,
    'Xtra' => 0,
    'method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574bfe3925d275_08810731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574bfe3925d275_08810731')) {function content_574bfe3925d275_08810731($_smarty_tpl) {?><section class="widget"> 
    <table id="shop-items" class="table table-striped dataTable no-footer"  width="100%">
        <thead>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <th><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</th>
                <?php } ?>
            </tr>
        </thead> 
        <tfoot>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <th><?php echo ucwords(str_replace($_smarty_tpl->tpl_vars['value']->value,'_',' '));?>
</th>
                <?php } ?>
            </tr>
        </tfoot>
    </table>
    <script type="text/javascript"> 
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
    </script>
</section><?php }} ?>
