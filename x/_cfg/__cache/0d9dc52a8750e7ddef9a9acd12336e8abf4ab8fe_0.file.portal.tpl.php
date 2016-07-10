<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-10 10:47:19
  from "/home/xopher/www/superdomx.com/x/html/watchtower/portal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57820b971d7e92_19355586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d9dc52a8750e7ddef9a9acd12336e8abf4ab8fe' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/watchtower/portal.tpl',
      1 => 1467874173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/col.tpl' => 1,
  ),
),false)) {
function content_57820b971d7e92_19355586 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.counter.php';
?>
<div class="row widget-container">
    <div class="col-md-12 ">
      <!-- <h2 class="page-title"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
, Welcome to SuperdomX <small>Oxygen</small></h2> -->
      <section class="widget locked">
          <div class="widget-controls">
              <?php if ($_smarty_tpl->tpl_vars['portal']->value) {?>
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
                  <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a>
                  <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a>
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
              <?php }?>
          </div>
          <!--
            <?php if (isset($_smarty_tpl->tpl_vars['_GET']->value['anchor'])) {?>
              <?php $_smarty_tpl->_assignInScope('anchor', $_smarty_tpl->tpl_vars['_GET']->value['anchor']);
?>
            <?php }?>
          -->
          <div class="jumbotron handle">
            <div class="container">
              <div id="carousel-watchtower" class="carousel slide">
                <ol class="carousel-indicators outer">
                    <li data-target="#carousel-watchtower" data-slide-to="<?php echo smarty_function_counter(array('start'=>0),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['anchor']->value == 'index') {?>active<?php }?>">
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                      <?php if ($_smarty_tpl->tpl_vars['key']->value) {?>
                    <li data-target="#carousel-watchtower" data-slide-to="<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['anchor']->value == $_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?>"></li>
                      <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ol>
                <div class="carousel-inner text-align-center">
                    <div class="item <?php if ($_smarty_tpl->tpl_vars['anchor']->value == 'index') {?>active<?php }?>">
                      <h1>
                        Dashboard
                      </h1>
                      <p>
                          <span data-widgster="fullscreen">
                            Customize Your <b>Super Powered</b> Dashboard.
                          </span>
                          <br/>
                          <br/>
                          <a class="btn btn-success btn-lg"  data-widgster="fullscreen" >
                            <i class="fa fa-graduation-cap"></i> 
                            Learn More
                          </a>
                          <!-- <a class="btn btn-success btn-lg " data-widgster="fullscreen"> -->
                          <a class="btn btn-info btn-lg btn-xs-block btn-block" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/login/profile" data-widgster="restore">
                              <i class="fa fa-arrow-left"></i> Back
                          </a>
                          <p data-widgster="restore">
                            The Dashboard is your's to control. Easily add any element to your dashboard by clicking on its
                            <i class="fa fa-eye"></i> icon
                          </p>
                      </p>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value) {?> 
                          <div class="item <?php if ($_smarty_tpl->tpl_vars['anchor']->value == $_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?>">
                              <h1>
                                <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>

                                <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i>
                              </h1>
                              <p>
                                  <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>

                                      <br/><br/>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?>
                                      <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                                          <a 
                                            href="/x/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" 
                                            title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  
                                            data-placement="top" 
                                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" 
                                            class="btn btn-lg  btn-xs-block
                                              <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>
                                                btn-danger
                                              <?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>
                                                btn-warning
                                              <?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>
                                                btn-success
                                              <?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>
                                                btn-primary
                                              <?php } else { ?>
                                                btn-default" disabled="disabled
                                              <?php }?>
                                            ">
                                              <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
  "></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>

                                          </a>
                                      <?php }?>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                              </p>
                          </div> 
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#carousel-watchtower" data-slide="prev">
                <i class="glyphicon glyphicon-chevron-left"></i>
            </a>
            <a class="right carousel-control" href="#carousel-watchtower" data-slide="next">
                <i class="glyphicon glyphicon-chevron-right"></i>
            </a>
          </div>
      </section>
    </div>
    <?php $_smarty_tpl->_assignInScope('portal', true);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['watchtower']->value['data'], 't', false, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['t']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['t']->value['path']) {?> 
            <?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>$_smarty_tpl->tpl_vars['t']->value['col'],'xPHP'=>$_smarty_tpl->tpl_vars['t']->value['path'],'title'=>$_smarty_tpl->tpl_vars['t']->value['title']), 0, true);
?>

        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<!-- page specific -->
<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/index.js"><?php echo '</script'; ?>
>
<?php }
}
