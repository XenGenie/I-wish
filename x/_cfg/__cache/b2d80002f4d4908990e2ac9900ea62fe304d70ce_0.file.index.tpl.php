<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-04 06:00:49
  from "/home/xopher/www/superdomx.com/x/X/xVitals/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_575252715c7b16_45863301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d80002f4d4908990e2ac9900ea62fe304d70ce' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xVitals/index.tpl',
      1 => 1464842354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
    'file:~widgets/visits.tpl' => 1,
  ),
),false)) {
function content_575252715c7b16_45863301 (Smarty_Internal_Template $_smarty_tpl) {
?>
        
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="description">
                        <strong><?php echo $_smarty_tpl->tpl_vars['PAGE_VIEWS']->value;?>
</strong> page views
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="big-text">
                       <?php echo $_smarty_tpl->tpl_vars['AVG_TIME']->value;?>
 <i class="fa fa-clock-o fa-spin"></i> 
                        
                    </div> 
                    <div class="description"> 
                        Average Minutes
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="description">
                        <strong><?php echo $_smarty_tpl->tpl_vars['NUM_ONLINE']->value;?>
</strong> Online
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="big-text"> 
                         +<?php echo $_smarty_tpl->tpl_vars['UNIQUE_HITS']->value;?>
 <i class="fa fa-smile-o"></i>
                    </div>
                    <div class="description">
                        Unique Hits
                    </div>
                </div>
            </div>
           <!--  <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="description">
                        <strong>410</strong> orders
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="box">
                    <div class="big-text">
                        6.42%
                    </div>
                    <div class="description">
                        <i class="fa fa-arrow-right"></i>
                        Traffic Growth
                    </div>
                </div>
            </div> -->
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
        <?php $_smarty_tpl->_subTemplateRender("file:~widgets/visits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        


        <div class="row">
        <div class="col-md-12">
           <div class="input-group">
                    <span class="input-group-btn">
                        <a href="https://dashboard.stripe.com/account/apikeys" target="_blank" class="btn btn-info" type="button">
                           Google Analytics ID
                        </a>
                    </span>
                    <input id="google_analytics_id" type="text"
                           data-trigger="change" required="required"
                           class="form-control"
                           name="nexus[google_analytics_id]" value="<?php if ($_smarty_tpl->tpl_vars['google_analytics_id']->value) {
echo $_smarty_tpl->tpl_vars['google_analytics_id']->value;
} else {
}?>">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button" onclick="window.updateNexusServer(this);">
                             <i class="fa fa-key"></i> Save Key
                        </button>
                    </span>
                </div>
                <?php echo '<script'; ?>
 type="text/javascript">
                    window.updateNexusServer = function (t) {
                        // body...
                        var t = $(t);
                        t.toggleClass('btn-success');
                        t.toggleClass('btn-danger');
                        var html = t.html();
                        t.html('<i class="fa fa-refresh fa-spin"></i> Saving...');
                        $.ajax({
                            type     : "POST",
                            url      : "/.json",
                            data     : {
                                config : {
                                    google_analytics_id : $('#google_analytics_id').val()
                                }
                            },
                            dataType : "json",
                            success: function(data)
                            {
                              // Handle the server response (display errors if necessary)
                                if(data.success)
                                    t.html(html);
                                    t.toggleClass('btn-danger');
                                    t.toggleClass('btn-success');
                            }
                        });
                    }
                <?php echo '</script'; ?>
>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <section class="widget large">
                <header>
                    <h4><i class="fa fa-home"></i> Top sources</h4>
                </header>
                <div class="body">
                    <div id="sources-chart-pie" class="chart pie-chart">
                        <svg></svg>
                    </div>
                </div>
                <footer id="data-chart-footer" class="pie-chart-footer">
                </footer>
            </section>
        </div>
        <div class="col-md-9 col-sm-6">
            <section class="widget large">
                <header>
                    <h4><i class="fa fa-bar-chart-o"></i> Bar Chart <small style="display: inline !important;" class="hidden-xs">Refresh page to see different data</small></h4>
                </header>
                <div id="sources-chart-bar" class="body chart">
                    <svg></svg>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="widget large">
                <header>
                    <h4><i class="fa fa-bullhorn"></i> Stream Stacked Chart</h4>
                </header>
                <div id="sources-chart-stacked" class="body chart">
                    <svg></svg>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section class="widget large">
                <header>
                    <h4><i class="fa fa-arrow-circle-o-right"></i> Line Chart</h4>
                </header>
                <div id="sources-chart-line" class="body chart">
                    <svg></svg>
                </div>
            </section>
        </div>
    </div>

        <div class="row">
            <div class="col-md-4">
                <section class="widget normal">
                    <header>
                        <h4>
                            <i class="fa fa-arrow-right"></i>
                            Progressbars
                        </h4>
                    </header>
                    <div class="body">
                        <h5 class="no-margin weight-normal">Simple one</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 60%;"></div>
                        </div>
                        <h5 class="no-margin weight-normal">Styled ones</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-inverse" style="width: 33%;"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 52%;"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" style="width: 43%;"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="widget normal">
                    <header>
                        <h4>
                            <i class="fa fa-caret-right"></i>
                            Small ones
                        </h4>
                    </header>
                    <div class="body">
                        <h5 class="no-margin weight-normal">Colors</h5>
                        <div class="progress progress-small">
                            <div class="progress-bar progress-bar-inverse" style="width: 23%;"></div>
                        </div>
                        <div class="progress progress-small">
                            <div class="progress-bar progress-bar-warning" style="width: 76%;"></div>
                        </div>
                        <div class="progress progress-small">
                            <div class="progress-bar progress-bar-success" style="width: 43%;"></div>
                        </div>
                        <div class="progress progress-small">
                            <div class="progress-bar progress-bar-danger" style="width: 53%;"></div>
                        </div>
                        <h5 class="no-margin weight-normal">Default progressbar</h5>
                        <div class="progress progress-small">
                            <div class="progress-bar" style="width: 60%;"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="widget normal">
                    <header>
                        <h4>
                            <i class="fa fa-angle-right"></i>
                            Some extensions
                        </h4>
                    </header>
                    <div class="body">
                        <h5 class="no-margin weight-normal">With embedded percentage</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 79%;">79%</div>
                        </div>
                        <h5 class="no-margin weight-normal">Active one</h5>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" style="width: 51%;">51%</div>
                        </div>
                        <h5 class="no-margin weight-normal">Inversed progress-bar</h5>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-inverse" style="width: 64%;">64%</div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-magnet"></i>
                            Server Overview
                        </h4>
                    </header>
                    <div class="body">
                        <ul class="server-stats">
                            <li>
                                <div class="key pull-right">CPU</div>
                                <div class="stat">
                                    <div class="info">60% / 37&deg;C / 3.3 Ghz</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">Mem</div>
                                <div class="stat">
                                    <div class="info">29% / 4GB (16 GB)</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-warning" style="width: 29%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">LAN</div>
                                <div class="stat">
                                    <div class="info">6 Mb/s <i class="fa fa-caret-down"></i> &nbsp; 3 Mb/s <i class="fa fa-caret-up"></i></div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-danger" style="width: 48%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="key pull-right">Access</div>
                                <div class="stat">
                                    <div class="info">17 Mb/s <i class="fa fa-caret-up"></i> &nbsp; (+18%)</div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-success" style="width: 64%;"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-md-3">
                <section class="widget widget-overview">
                    <header>
                        <h4>
                            <i class="fa fa-lightbulb"></i>
                            Stats Overview
                        </h4>
                    </header>
                    <div class="body">
                        <ul class="overall-stats">
                            <li>
                                <div class="icon pull-left">
                                    <i class="fa fa-user"></i>
                                </div>
                                <span class="key">Total Users</span>
                                <div class="value pull-right">
                                    <span class="badge badge-danger">7 541</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon pull-left">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <span class="key">Total Orders</span>
                                <div class="value pull-right">
                                    <span class="badge badge-warning">2 876</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon pull-left">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <span class="key">Desktop</span>
                                <div class="value pull-right">
                                    <span class="badge badge-info">68%</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon pull-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span class="key">Mobile</span>
                                <div class="value pull-right">
                                    <span class="badge badge-default">32%</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    

    <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/index.js"><?php echo '</script'; ?>
>

    <!-- page specific -->
    <?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/stats.js"><?php echo '</script'; ?>
>
 
<?php }
}
