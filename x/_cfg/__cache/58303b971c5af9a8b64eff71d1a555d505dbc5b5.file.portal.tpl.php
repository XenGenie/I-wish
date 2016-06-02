<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-02 06:21:00
         compiled from "/home/xopher/www/superdomx.com/x/html/watchtower/portal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:552900393565a958059b410-90985307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58303b971c5af9a8b64eff71d1a555d505dbc5b5' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/watchtower/portal.tpl',
      1 => 1464841258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '552900393565a958059b410-90985307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a9580728065_09755517',
  'variables' => 
  array (
    'user' => 0,
    'portal' => 0,
    'title' => 0,
    'xPHP' => 0,
    'Xtra' => 0,
    'method' => 0,
    'col' => 0,
    'anchor' => 0,
    'admin_menu' => 0,
    'key' => 0,
    'toBackDoor' => 0,
    'item' => 0,
    'xtras' => 0,
    'xtra' => 0,
    'watchtower' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a9580728065_09755517')) {function content_565a9580728065_09755517($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.counter.php';
?><div class="row widget-container">
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
                    <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a>
                    <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a>
                    <a data-widgster="close" title="Close" href="#"
                    onclick="window.addBloxToTower('<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
','<?php if ($_smarty_tpl->tpl_vars['xPHP']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['xPHP']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
<?php }?>',<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
, this);"
                    ><i class="glyphicon glyphicon-remove"></i></a>
                <?php }?>
            </div>
            <div class="jumbotron handle">
              <div class="container">
                <div id="carousel-watchtower" class="carousel slide">
                  <ol class="carousel-indicators outer">
                      <li data-target="#carousel-watchtower" data-slide-to="<?php echo smarty_function_counter(array('start'=>0),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['anchor']->value=='index') {?>active<?php }?>">
                      </li>
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value) {?>
                      <li data-target="#carousel-watchtower" data-slide-to="<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->tpl_vars['anchor']->value==$_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?>"></li>
                        <?php }?>
                      <?php } ?>
                  </ol>
                  <div class="carousel-inner text-align-center">
                      <div class="item <?php if ($_smarty_tpl->tpl_vars['anchor']->value=='index') {?>active<?php }?>">
                        <h1>
                          <!-- <img src="/users/avatar" style="max-height: 200px; border-radius: 1000px;" class="pull-left"/> -->
                          <!-- <i class="fa fa-4x fa-dashboard pull-left"></i> -->
                            Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>

                            <!-- , Welcome to SuperdomX <small>Oxygen</small> -->
                        </h1>
                        <p >
                          From the Master Tower, you can watch any part of your domain;<br/> Click the <i class="fa fa-eye"></i> icon in a panel to view it here.
                                        <br/>
                            <a class="btn btn-primary btn-lg"  data-widgster="fullscreen" >
                                <i class="fa fa-graduation-cap"></i> Learn More
                            </a>
                            <!-- <a class="btn btn-success btn-lg " data-widgster="fullscreen"> -->
                            <a class="btn btn-info btn-lg " href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/login/profile" data-widgster="restore">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>

                            <p data-widgster="restore">
                                Normally, there would be some more content here to describe what was just said above. Coming soon...
                            </p>
                        </p>
                      </div>
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                          <?php if ($_smarty_tpl->tpl_vars['key']->value) {?> 
                            <div class="item <?php if ($_smarty_tpl->tpl_vars['anchor']->value==$_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?>">
                                <h1>
                                  <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>

                                  <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i>
                                </h1>
                                <p>
                                    <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>

                                        <br/><br/>
                                      <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                                            <a  href="/x/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" class="btn btn-lg <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>btn-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>btn-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>btn-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>btn-primary<?php } else { ?>btn-default" disabled="disabled<?php }?>" >
                                                <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
  "></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>

                                            </a>
                                        <?php }?>
                                    <?php } ?>
                                </p>
                            </div> 
                          <?php }?>
                      <?php } ?> 
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
    <?php $_smarty_tpl->tpl_vars['portal'] = new Smarty_variable(true, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['watchtower']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['t']->value['path']) {?> 
            <?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>$_smarty_tpl->tpl_vars['t']->value['col'],'xPHP'=>$_smarty_tpl->tpl_vars['t']->value['path'],'title'=>$_smarty_tpl->tpl_vars['t']->value['title']), 0);?>

        <?php }?>
    <?php } ?>
</div>
<!-- page specific -->
<script type="text/javascript" src="/x/html/layout/watchtower/js/index.js"></script>
<?php }} ?>
