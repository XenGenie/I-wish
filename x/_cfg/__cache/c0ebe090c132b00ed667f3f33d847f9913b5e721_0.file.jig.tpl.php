<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-04 08:45:21
  from "/home/xopher/www/superdomx.com/x/html/~widgets/jig.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57527901af18a1_18193808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ebe090c132b00ed667f3f33d847f9913b5e721' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~widgets/jig.tpl',
      1 => 1465022718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57527901af18a1_18193808 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <section class="widget <?php if ($_smarty_tpl->tpl_vars['large']->value) {?>large<?php }?> <?php if ($_smarty_tpl->tpl_vars['locked']->value) {?>locked<?php }?>" data-widgster-collapsed="<?php if ($_smarty_tpl->tpl_vars['collapsed']->value) {?>true<?php }?>" id="default-widget" data-widgster-load="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['toSideDoor']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['xPHP']->value != '') {
echo $_smarty_tpl->tpl_vars['xPHP']->value;
} else {
echo $_smarty_tpl->tpl_vars['Xtra']->value;
}?>/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" data-widgster-autoload="true">
 <?php if (!$_smarty_tpl->tpl_vars['header']->value) {?>
    <header>
        <?php $_smarty_tpl->_assignInScope('path', explode("/",$_smarty_tpl->tpl_vars['xPHP']->value));
?> 
        <span style="position: absolute; left: 0; top: 0">
            <?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'x', false, 'xtra');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->value => $_smarty_tpl->tpl_vars['x']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['path']->value[0] == substr(strtolower($_smarty_tpl->tpl_vars['x']->value['class']),1)) {?>
                        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['x']->value['see'];?>
"></i> 
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['x']->value['mini'];?>
"></i> 
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'x', false, 'xtra');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->value => $_smarty_tpl->tpl_vars['x']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['path']->value[0] == substr(strtolower($_smarty_tpl->tpl_vars['x']->value['class']),1)) {?> 
                        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['x']->value['mini'];?>
"></i> 
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 

                
            <?php }?>
        </span>
        <h5 class="text-align-center">  
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        </h5>
        <div class="widget-controls">
            <?php if ($_smarty_tpl->tpl_vars['portal']->value) {?> 
                <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>

                <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a> 
                <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a> 


                <a data-widgster="load" title="Reload" href="#" ><i class="glyphicon glyphicon-refresh"></i></a> 

                <a data-widgster="close" title="Close" href="#"
                onclick="window.addBloxToTower('<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
','<?php if ($_smarty_tpl->tpl_vars['xPHP']->value != '') {
echo $_smarty_tpl->tpl_vars['xPHP']->value;
} else {
echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;
}?>',<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
, this);"
                ><i class="glyphicon glyphicon-remove"></i></a> 
                <a data-widgster="watchtower" title="<?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>Stop Watching<?php } else { ?>Add to Watchtower<?php }?>" 
                href="javascript:" onclick="window.addBloxToTower('<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
','<?php if ($_smarty_tpl->tpl_vars['xPHP']->value != '') {
echo $_smarty_tpl->tpl_vars['xPHP']->value;
} else {
echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;
}?>',<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
, this);"><i class="fa fa-eye<?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>-slash<?php }?>"></i></a>
            <?php } else { ?>
                <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>

                <a data-widgster="load" title="Reload" href="#" ><i class="glyphicon glyphicon-refresh"></i></a> 

                <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a> 
                <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a> 

                <a data-widgster="watchtower" title="<?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>Stop Watching<?php } else { ?>Add to Watchtower<?php }?>" 
                href="javascript:" onclick="window.addBloxToTower('<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
','<?php if ($_smarty_tpl->tpl_vars['xPHP']->value != '') {
echo $_smarty_tpl->tpl_vars['xPHP']->value;
} else {
echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;
}?>',<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
, this);"><i class="fa fa-eye<?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>-slash<?php }?>"></i></a>
            <?php }?>
        </div>
    </header>
<?php }?>
    <div class="body"> 
         
        <?php if ($_smarty_tpl->tpl_vars['xPHP']->value != '') {?>
             
        <?php } else { ?>
             
        <?php }?>
    </div>
    <div class="footer text-align-center">
        <br/>
        <!-- <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span> -->
    </div>
</section>
<?php }
}
