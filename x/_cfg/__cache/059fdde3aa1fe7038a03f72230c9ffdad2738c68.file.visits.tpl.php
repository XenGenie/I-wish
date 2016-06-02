<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:38:19
         compiled from "x/html/~widgets/visits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:464464958571b266b672dc5-78310483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059fdde3aa1fe7038a03f72230c9ffdad2738c68' => 
    array (
      0 => 'x/html/~widgets/visits.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '464464958571b266b672dc5-78310483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_VIEWS' => 0,
    'AVG_TIME' => 0,
    'NUM_ONLINE' => 0,
    'UNIQUE_HITS' => 0,
    'HTML' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b266b6dc8b1_89797886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b266b6dc8b1_89797886')) {function content_571b266b6dc8b1_89797886($_smarty_tpl) {?><section class="widget" >
    <header>
        <h4>
            Visits
            <small>
                Based on a three months data
            </small>
        </h4>
        <div class="widget-controls">
            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </header>
    <div class="body no-margin">
        <div id="visits-chart" class="chart visits-chart">
            <svg></svg>
        </div>
        <!-- <div class="visits-info well well-sm">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="key"><i class="fa fa-users"></i> Total Traffic</div>
                    <div class="value"><?php echo $_smarty_tpl->tpl_vars['PAGE_VIEWS']->value;?>
 </div>
                </div>
                
                <div class="col-sm-3 col-xs-6">
                    <div class="key"><i class="fa fa-clock"></i> Average Time</div>
                    <div class="value"><?php echo $_smarty_tpl->tpl_vars['AVG_TIME']->value;?>
  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="key"><i class="fa fa-globe"></i> Users Online</div>
                    <div class="value"><?php echo $_smarty_tpl->tpl_vars['NUM_ONLINE']->value;?>
 </i></div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="key"><i class="fa fa-user"></i> Unique Visits</div>
                    <div class="value"><?php echo $_smarty_tpl->tpl_vars['UNIQUE_HITS']->value;?>
 </div>
                </div>
            </div>
        </div> -->
    </div>
    <?php $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['HTML']->value['BODY']['SCRIPT']] = new Smarty_variable($_smarty_tpl->getSubTemplate ('~widgets/analytics/graph.visits.js', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

</section><?php }} ?>
