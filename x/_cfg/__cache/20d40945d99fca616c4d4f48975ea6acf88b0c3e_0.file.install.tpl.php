<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-04 02:46:10
  from "/home/xopher/www/superdomx.com/x/X/xNexus/install.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5779b1d2346e55_80232320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d40945d99fca616c4d4f48975ea6acf88b0c3e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xNexus/install.tpl',
      1 => 1448770349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5779b1d2346e55_80232320 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
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

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['remote_xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?> 
        <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                <div class="col-md-6 <?php if ($_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['version'] == $_smarty_tpl->tpl_vars['xtra']->value['version']) {?>hidden<?php }?>"> 
                   <section class="widget text-align-center">
                        <h1><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
 fa-5x"></i> </h1>
                        <h1> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 </h1> 
                        <p><?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
</p>
                        
                       
                    <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value[48];
echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
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
                          <?php echo '<script'; ?>

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
                          <?php echo '</script'; ?>
>
                        </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['xtras']->value[((string)$_smarty_tpl->tpl_vars['x']->value)]['version'] == '') {?>

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
