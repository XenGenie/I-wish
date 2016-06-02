<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 11:27:26
         compiled from "/home/xopher/www/superdomx.com/x/crm/xNexus/xtras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1790973685574c077e7f0816-92012441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14de65d37a571aa8487418a6159d43aa5f7367db' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xNexus/xtras.tpl',
      1 => 1448770349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790973685574c077e7f0816-92012441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xtras' => 0,
    'master_xtras' => 0,
    'master' => 0,
    'x' => 0,
    'outdated' => 0,
    'toBackDoor' => 0,
    'Xtra' => 0,
    'suite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574c077e912284_21854422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574c077e912284_21854422')) {function content_574c077e912284_21854422($_smarty_tpl) {?><div class="list-group">
    

    <?php $_smarty_tpl->tpl_vars['outdated'] = new Smarty_variable(false, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
 $_smarty_tpl->tpl_vars['xtra']->value = $_smarty_tpl->tpl_vars['x']->key;
?>
        <?php $_smarty_tpl->tpl_vars['master'] = new Smarty_variable($_smarty_tpl->tpl_vars['master_xtras']->value[((string)$_smarty_tpl->tpl_vars['xtra']->value)], null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['master']->value['version']!=$_smarty_tpl->tpl_vars['x']->value['version']) {?>
            <?php $_smarty_tpl->tpl_vars['outdated'] = new Smarty_variable(true, null, 0);?>
        <?php }?>
    <?php } ?>


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
        <?php $_smarty_tpl->tpl_vars['outdated'] = new Smarty_variable(false, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
 $_smarty_tpl->tpl_vars['xtra']->value = $_smarty_tpl->tpl_vars['x']->key;
?> 
            <?php $_smarty_tpl->tpl_vars['master'] = new Smarty_variable($_smarty_tpl->tpl_vars['master_xtras']->value[((string)$_smarty_tpl->tpl_vars['xtra']->value)], null, 0);?>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/<?php echo $_smarty_tpl->tpl_vars['master']->value['class'];?>
/" class="list-group-item  <?php if ($_smarty_tpl->tpl_vars['master']->value['version']==$_smarty_tpl->tpl_vars['x']->value['version']) {?>hidden<?php }?> "> 
            <?php if ($_smarty_tpl->tpl_vars['master_xtras']->value[((string)$_smarty_tpl->tpl_vars['xtra']->value)]['version']==$_smarty_tpl->tpl_vars['x']->value['version']) {?>
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
        <?php } ?> 
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
    <script type="text/javascript">
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
    </script>
</div><?php }} ?>
