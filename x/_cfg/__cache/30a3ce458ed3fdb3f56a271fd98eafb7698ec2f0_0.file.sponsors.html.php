<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 08:05:54
  from "/home/xopher/www/superdomx.com/templates/sponsors.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fccc248afc2_58248439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30a3ce458ed3fdb3f56a271fd98eafb7698ec2f0' => 
    array (
      0 => '/home/xopher/www/superdomx.com/templates/sponsors.html',
      1 => 1463031663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fccc248afc2_58248439 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="content-wrapper mid-vertical-positioning clearfix">
    <div class="col-sm-12 text-left">
      <h1 class="section-title">
        Sponsors
      </h1>
      <div class="tabpanel styled-tabs uniform-height" role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <?php $_smarty_tpl->_assignInScope('active', true);
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sponsors']->value[0], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['k']->value != "id") {?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['active']->value) {?>active<?php }?>" role="presentation">
                <a aria-controls="tabs-tab1" data-toggle="tab" href=
                "#tabs-tab<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" role="tab"><i class=
                "icon fa fa-diamond"></i><span><?php echo ucwords($_smarty_tpl->tpl_vars['k']->value);?>
</span></a>
              </li>
              <?php $_smarty_tpl->_assignInScope('active', false);
?>
            <?php }?> 
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <!-- Tab panes --> 
        <div class="tab-content text-center">
          <?php $_smarty_tpl->_assignInScope('active', true);
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sponsors']->value[0], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['k']->value != "id") {?>
              <div class="tab-pane row fade in <?php if ($_smarty_tpl->tpl_vars['active']->value) {?>active<?php }?>" id="tabs-tab<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" role="tabpanel"> 
                <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

              </div>
              <?php $_smarty_tpl->_assignInScope('active', false);
?>
            <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
     
        </div>
        <!-- .tab-content -->
      </div>
      <div class="text-center">
        <hr/>
        <a class="link-scroll btn btn-outline-inverse btn-lg " href="#donate">
          make a donation <i class="fa fa-dollar"></i>
        </a>
       <a class="link-scroll btn btn-outline-inverse btn-lg " href="#join" 
                >
                <i class="fa fa-shield"></i>
                
                lifetime membership
              </a>
      </div>
      <!-- .tabpanel -->
    </div>
    <!-- .col-sm-10 -->
  </div>
<!-- .section-wrapper -->
<?php }
}
