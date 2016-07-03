<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:37:55
         compiled from "/home/xopher/www/superdomx.com/x/X/xNexus/install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:398431200571b265346bad6-81997332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a7c6237bd15cff6174db1fac9efa0f00bb57770' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xNexus/install.tpl',
      1 => 1448770349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '398431200571b265346bad6-81997332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'toBackDoor' => 0,
    'admin_menu' => 0,
    'key' => 0,
    'item' => 0,
    'remote_xtras' => 0,
    'xtra' => 0,
    'xtras' => 0,
    'ICON' => 0,
    'x' => 0,
    'Xtra' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b265379b2c9_34273591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b265379b2c9_34273591')) {function content_571b265379b2c9_34273591($_smarty_tpl) {?><div class="row">
    <div class="col-md-12">
        <section class="widget">
            <div class="jumbotron">
                <h1><i class="fa fa-cloud"></i> Add & Remove Xtras</h1>
                <p>
                   Choose from many Xtras to Install into SuperDom. 
                   <br/>
                   <span class="label label-success"><i class="fa fa-ge"></i> Nexus Server : <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['super_nexus'];?>
</span>
                </p>
                <!-- <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/access" class="btn btn-info btn-lg"><i class="fa fa-lock"></i> Manage Locks</a> -->
                <!-- <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/access" class="btn btn-warning btn-lg"><i class="fa fa-key"></i> Master Key</a> -->
            </div>  
        </section>
    </div>

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value) {?> 
        <div class="col-md-12"> 
            <section class="widget">
                <h1><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 fa-1x"></i> <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
<small>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>

                </small></h1>
                
            </section>
        </div> 
        <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['remote_xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?> 
        <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                <div class="col-md-6 <?php if ($_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['version']==$_smarty_tpl->tpl_vars['xtra']->value['version']) {?>hidden<?php }?>"> 
                   <section class="widget text-align-center">
                        <h1><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
 fa-5x"></i> </h1>
                        <h1> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 </h1> 
                        <p><?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
</p>
                        
                       
                    <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value[48];?>
<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" desc="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" link="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" file="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" icon="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
">  -->
                         <!-- <?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
 -->
                         <?php if ($_smarty_tpl->tpl_vars['xtra']->value['price']) {?>  
                            <h1 style="position: absolute; top: 0; left; 5px; color: rgba(0,0,0,0.25);font-size: 333%">
                                <i class="fa fa-money"></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['price'];?>
 
                            </h1>
                            <form action="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/submodule/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
/" method="POST">
                            <input name="x[price]" type="hidden" value="<?php echo substr($_smarty_tpl->tpl_vars['xtra']->value['price'],1);?>
00" />
                            <input name="x[class]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
" />
                          <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_qBfAk1rBo6lXsdTHFWYU9GGU"
                            data-amount='<?php echo substr($_smarty_tpl->tpl_vars['xtra']->value['price'],1);?>
00'
                            data-name="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 <?php echo trim($_smarty_tpl->tpl_vars['xtra']->value['price']);?>
"
                            data-email="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"
                            data-description="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"
                            data-image="/bin/images/icons/48x48/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
">
                          </script>
                        </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['version']=='') {?>

                        <a  href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/submodule/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" class="btn btn-info btn-lg"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" >
                            <i class="fa fa-cloud-download"></i> Download</a>
                        <?php }?>
                         <hr/>
                         <span class="label <?php if ($_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['alpha']) {?>label-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['beta']) {?>label-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['delta']) {?>label-success<?php } elseif ($_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['omega']) {?>label-primary<?php } else { ?>label-default" disabled="disabled<?php }?>">
                         <i class="fa fa-globe"></i> <?php echo $_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['version'];?>
</span>
                         vs. 
                         <span class="label <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>label-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>label-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>label-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>label-primary<?php } else { ?>label-default" disabled="disabled<?php }?>"><i class="fa fa-ge"></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['version'];?>
</span><br/>
                    </section>
                </div>
            <?php }?>
        <?php } ?>
        <?php }?>
    <?php } ?>  
</div>

<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>
<?php }} ?>
