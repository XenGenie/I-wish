<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 11:00:59
  from "/home/xopher/www/superdomx.com/x/X/xNexus/xtras.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57820ecb5fa111_28481607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac1ec1493164b161a89b854f2c39e835a2c9ed0e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xNexus/xtras.tpl',
      1 => 1448770349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57820ecb5fa111_28481607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list-group">
    

    <?php $_smarty_tpl->_assignInScope('outdated', false);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'x', false, 'xtra');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->value => $_smarty_tpl->tpl_vars['x']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('master', $_smarty_tpl->tpl_vars['master_xtras']->value[((string)$_smarty_tpl->tpl_vars['xtra']->value)]);
?>
        <?php if ($_smarty_tpl->tpl_vars['master']->value['version'] != $_smarty_tpl->tpl_vars['x']->value['version']) {?>
            <?php $_smarty_tpl->_assignInScope('outdated', true);
?>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    <?php if ($_smarty_tpl->tpl_vars['outdated']->value) {?>
        <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/pullShell/<?php echo $_smarty_tpl->tpl_vars['suite']->value;?>
" class="btn btn-primary btn-block">
            <!-- <i class="fa fa-chevron-right pull-right"></i> -->
            <i class="fa fa-cloud-download"></i> Latest Stable Release
        </a>
<!--         <a href="#" class="list-group-item">
            <i class="fa fa-chevron-right pull-right"></i>
            <span class="badge">Master Version</span>
            
            <strong>Local Xtra</strong> - <span class="label  label-success "> VERSION</span> 
        </a> 
 -->
        <?php $_smarty_tpl->_assignInScope('outdated', false);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'x', false, 'xtra');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->value => $_smarty_tpl->tpl_vars['x']->value) {
?> 
            <?php $_smarty_tpl->_assignInScope('master', $_smarty_tpl->tpl_vars['master_xtras']->value[((string)$_smarty_tpl->tpl_vars['xtra']->value)]);
?>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/<?php echo $_smarty_tpl->tpl_vars['master']->value['class'];?>
/" class="list-group-item  <?php if ($_smarty_tpl->tpl_vars['master']->value['version'] == $_smarty_tpl->tpl_vars['x']->value['version']) {?>hidden<?php }?> "> 
            <?php if ($_smarty_tpl->tpl_vars['master_xtras']->value[((string)$_smarty_tpl->tpl_vars['xtra']->value)]['version'] == $_smarty_tpl->tpl_vars['x']->value['version']) {?>
                <i class="fa fa-check text-success pull-right"></i> 
            <?php } else { ?>
                <i class="fa fa-git pull-right text-danger"></i> 
            <?php }?> 
                <span class="badge <?php if ($_smarty_tpl->tpl_vars['master']->value['alpha']) {?>badge-danger<?php } elseif ($_smarty_tpl->tpl_vars['master']->value['beta']) {?>badge-warning<?php } elseif ($_smarty_tpl->tpl_vars['master']->value['delta']) {?>badge-success<?php } elseif ($_smarty_tpl->tpl_vars['master']->value['omega']) {?>badge-primary<?php } else { ?>badge-default<?php }?>"><?php echo $_smarty_tpl->tpl_vars['master']->value['version'];?>
</span> 

                <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['x']->value['mini'];?>
"></i>&nbsp;
               <?php echo $_smarty_tpl->tpl_vars['x']->value['class'];?>
 | <span class="label <?php if ($_smarty_tpl->tpl_vars['x']->value['alpha']) {?>label-danger<?php } elseif ($_smarty_tpl->tpl_vars['x']->value['beta']) {?>label-warning<?php } elseif ($_smarty_tpl->tpl_vars['x']->value['delta']) {?>label-success<?php } elseif ($_smarty_tpl->tpl_vars['x']->value['omega']) {?>label-primary<?php } else { ?>label-default<?php }?>"><?php echo $_smarty_tpl->tpl_vars['x']->value['version'];?>
</span> 
            </a> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
    <?php } else { ?>
        <a href="#" class="btn btn-success active disabled btn-block">
            <!-- <i class="fa fa-chevron-right pull-right"></i> -->
            <i class="fa fa-check"></i> Everything Up-to-date
        </a>
        
        <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/pullShell/<?php echo $_smarty_tpl->tpl_vars['suite']->value;?>
" class="btn btn-primary btn-block">
            <!-- <i class="fa fa-chevron-right pull-right"></i> -->
            <i class="fa fa-cloud-download"></i> Sync w/ Latest Stable Release
        </a>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript">
        window.updateXtra = function  ($class) {
            var yes = confirm("Are you sure you want to update "+$class );

            if(yes){
                //alert("Updating: "+"/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/"+$class+"/");
                location.href("/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/"+$class+"/");
            }

        }
    <?php echo '</script'; ?>
>
</div><?php }
}
