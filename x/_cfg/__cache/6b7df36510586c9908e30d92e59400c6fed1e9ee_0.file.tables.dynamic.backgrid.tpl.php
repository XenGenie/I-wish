<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 10:49:36
  from "/home/xopher/www/superdomx.com/x/html/layout/watchtower/tables.dynamic.backgrid.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57820c20b11154_97962124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b7df36510586c9908e30d92e59400c6fed1e9ee' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/layout/watchtower/tables.dynamic.backgrid.tpl',
      1 => 1467942491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57820c20b11154_97962124 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">
        <section class="widget">
            <header>
                <h4>
                    <i class="fa fa-file-alt"></i>
                    Dynamic table
                </h4>
                <div class="actions hidden-xs-portrait">
                    <input id="search" type="search" placeholder="Enter country">
                </div>
            </header>
            <div class="body">
                <blockquote class="blockquote-sm">
                    Editable, validatable, filterable and sortable table made with
                    <a href="http://backgridjs.com/" target="_blank">Backgrid.js</a>
                </blockquote>
                <div id="table-dynamic">

                </div>
                <div>
                    <button class="btn btn-warning">
                        <i class="fa fa-plus"></i>
                        Add new
                    </button>
                    <button class="btn btn-inverse">
                        <i class="fa fa-refresh"></i>
                        Refresh
                    </button>
                    <button class="btn btn-inverse">
                        <i class="fa fa-exchange"></i>
                        Test connection
                    </button>
                </div>
            </div>
        </section>
    </div>
</div>
<?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/tables-dynamic.js"><?php echo '</script'; ?>
>
<?php }
}
