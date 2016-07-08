<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:59:50
  from "/home/xopher/www/superdomx.com/x/html/~widgets/visits.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f09165394a0_14931966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f77e2ab31085b020e95734a70d4a5ac89786962' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~widgets/visits.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/analytics/graph.visits.js' => 1,
  ),
),false)) {
function content_577f09165394a0_14931966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="widget" >
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
    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:~widgets/analytics/graph.visits.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign($_smarty_tpl->tpl_vars['HTML']->value['BODY']['SCRIPT'], ob_get_clean());
?>

</section><?php }
}
