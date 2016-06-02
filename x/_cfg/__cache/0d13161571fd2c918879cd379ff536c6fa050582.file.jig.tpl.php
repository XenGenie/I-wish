<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 07:07:24
         compiled from "x/html/~widgets/jig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:353431331565a961cef5bb3-66016769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d13161571fd2c918879cd379ff536c6fa050582' => 
    array (
      0 => 'x/html/~widgets/jig.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353431331565a961cef5bb3-66016769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'large' => 0,
    'locked' => 0,
    'collapsed' => 0,
    'toBackDoor' => 0,
    'toSideDoor' => 0,
    'xPHP' => 0,
    'Xtra' => 0,
    'method' => 0,
    'header' => 0,
    'portal' => 0,
    'xtras' => 0,
    'path' => 0,
    'x' => 0,
    'title' => 0,
    'col' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a961d096327_92536694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a961d096327_92536694')) {function content_565a961d096327_92536694($_smarty_tpl) {?> <section class="widget <?php if ($_smarty_tpl->tpl_vars['large']->value) {?>large<?php }?> <?php if ($_smarty_tpl->tpl_vars['locked']->value) {?>locked<?php }?>" data-widgster-collapsed="<?php if ($_smarty_tpl->tpl_vars['collapsed']->value) {?>true<?php }?>" id="default-widget" data-widgster-load="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['toSideDoor']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['xPHP']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['xPHP']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
<?php }?>/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" data-widgster-autoload="true">
 <?php if (!$_smarty_tpl->tpl_vars['header']->value) {?>
    <header>
        <?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(explode("/",$_smarty_tpl->tpl_vars['xPHP']->value), null, 0);?> 
        <span style="position: absolute; left: 0; top: 0">
            <?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>
                 <?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
 $_smarty_tpl->tpl_vars['xtra']->value = $_smarty_tpl->tpl_vars['x']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['path']->value[0]==substr(strtolower($_smarty_tpl->tpl_vars['x']->value['class']),1)) {?>
                        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['x']->value['see'];?>
"></i> 
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['x']->value['mini'];?>
"></i> 
                    <?php }?>
                <?php } ?> 
            <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
 $_smarty_tpl->tpl_vars['xtra']->value = $_smarty_tpl->tpl_vars['x']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['path']->value[0]==substr(strtolower($_smarty_tpl->tpl_vars['x']->value['class']),1)) {?> 
                        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['x']->value['mini'];?>
"></i> 
                    <?php }?>
                <?php } ?> 

                
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
','<?php if ($_smarty_tpl->tpl_vars['xPHP']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['xPHP']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?>',<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
, this);"
                ><i class="glyphicon glyphicon-remove"></i></a> 
                <a data-widgster="watchtower" title="<?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>Stop Watching<?php } else { ?>Add to Watchtower<?php }?>" 
                href="javascript:" onclick="window.addBloxToTower('<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
','<?php if ($_smarty_tpl->tpl_vars['xPHP']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['xPHP']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?>',<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
, this);"><i class="fa fa-eye<?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>-slash<?php }?>"></i></a>
            <?php } else { ?>
                <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>

                <a data-widgster="load" title="Reload" href="#" ><i class="glyphicon glyphicon-refresh"></i></a> 

                <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a> 
                <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a> 

                <a data-widgster="watchtower" title="<?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>Stop Watching<?php } else { ?>Add to Watchtower<?php }?>" 
                href="javascript:" onclick="window.addBloxToTower('<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
','<?php if ($_smarty_tpl->tpl_vars['xPHP']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['xPHP']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?>',<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
, this);"><i class="fa fa-eye<?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>-slash<?php }?>"></i></a>
            <?php }?>
        </div>
    </header>
<?php }?>
    <div class="body"> 
         
        <?php if ($_smarty_tpl->tpl_vars['xPHP']->value!='') {?>
             
        <?php } else { ?>
             
        <?php }?>
    </div>
    <div class="footer text-align-center">
        <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
    </div>
</section><?php }} ?>
