<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 11:27:25
         compiled from "/home/xopher/www/superdomx.com/x/crm/xNexus/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1961913139574c077dc19dd0-54351055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14093f958f77c5e66d1c538c447d99031d517bfe' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/crm/xNexus/index.tpl',
      1 => 1448770349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1961913139574c077dc19dd0-54351055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toBackDoor' => 0,
    'Xtra' => 0,
    'super_nexus' => 0,
    'method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574c077dcc1a68_27803542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574c077dcc1a68_27803542')) {function content_574c077dcc1a68_27803542($_smarty_tpl) {?><div class="row">        
    <div class="col-md-12"> 
        <section class="widget">
            <div class="jumbotron handle">
                <div class="container">
                    <div class="widget-controls" data-widgster="restore">
                        <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                        <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                        <!-- <a data-widgster="load" title="I am spinning!" href="#"><i class="glyphicon glyphicon-refresh"></i></a> -->
                        <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                    <h1>    
                        <i class="fa fa-ge  fa-spin"></i> <em>The Nexus</em>

                        <span  data-widgster="restore"> 
                        <a class="btn btn-primary btn-lg " data-widgster="restore">
                            <i class="fa fa-backward"></i> Go Back  
                        </a>
                         <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/pullShell" class="btn btn-warning btn-lg ">
                           <i class="fa fa-github"></i>
                        </a>
                       <!--  <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/git/core" class="btn btn-danger btn-lg " data-widgster="restore">
                           <i class="fa fa-ge"></i>
                        </a> -->
                        </span>
                        
                      <!--   <label class="label label-danger pull-right">
                        
                            Last Communication: 
                        </label>  --> 
                    </h1>
                    <p class="lead">
                       The Nexus powers your Super Domain by constantly keeping it secure and up-to-date with the latest software.<br/>
                       
                        

                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default active disabled" type="button">
                                     Super Nexus Address
                                </button>
                            </span>
                            <input id="super_nexus" type="text"
                                   data-trigger="change" required="required"
                                   class="form-control"
                                   name="nexus[super]" value="<?php if ($_smarty_tpl->tpl_vars['super_nexus']->value) {?><?php echo $_smarty_tpl->tpl_vars['super_nexus']->value;?>
<?php } else { ?>http://nexus.superdomx.com<?php }?>">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" onclick="window.updateNexusServer(this);">
                                     C<i class="fa fa-crosshairs"></i>nnect C<i class="fa fa-cog"></i>re
                                </button>
                            </span>
                        </div>
                        <script type="text/javascript">
                            window.updateNexusServer = function (t) {
                                
                                // body...
                                var t = $(t);
                                t.toggleClass('btn-success');
                                t.toggleClass('btn-danger');
                                var html = t.html();


                                t.html('<i class="fa fa-refresh fa-spin"></i> Connecting...');

                                $.ajax({
                                    type     : "POST",
                                    url      : "/.json",
                                    data     : {
                                        config : {
                                            super_nexus : $('#super_nexus').val()
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
                        </script>
<!--                    
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/pullShell" class="btn btn-danger btn-lg" >
                           Update Suite
                        </a>

                        <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/pullShell" class="btn btn-danger btn-lg" >
                           Update Library
                        </a> -->
                    </p> 
                    <p class="text-align-right">
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/master" class="btn btn-success " >
                          <i class="fa fa-refresh"></i>
                        </a>

                        <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/install" class="btn btn-info " >
                           <i class="fa fa-star"></i>
                        </a>

                        <a class="btn btn-primary" data-widgster="fullscreen">
                           <i class="fa fa-question"></i> 
                        </a>

                        <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/master" class="btn btn-transparent " >
                          <i class="fa fa-columns"></i> Templates
                        </a>



                    </p>

                    <div class="col-md-12" data-widgster="restore">
                        <header>
                            <blockquote><h2>We are all connected;</h2>To each other, Biologically; To the Earth, Chemically; To the rest of the Universe - Atomically. <br/>― Neil deGrasse Tyson

                            <h3>... And to the Internet; Digitally.</h3>― SuperDom
                            </blockquote> 
 
                        </header>
                        <div class="row">
                            <p>
                                Welcome to the "neXus" Door neighbor!
                            </p>  
                            <h3>SuperDom stays Up-to-date, with the latest Blueprints Blox, Xtras & Costumez.</h3>
                            
                        
                        

                       
                       
                             <div class="alert alert-info col-md-3" style="height:200px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-3x fa-wrench"></i> </button> 
                                <h3><strong>Blueprints</strong></h3>
                                 <strong>Get a head start on the layout of your website/app with a blueprint. Pre-made, structurely & responsively sound formats.</strong>
                                 <a class="btn btn-info btn-lg " data-widgster="restore">
                                    <i class="fa fa-wrench"></i> Go to Blueprints &raquo;
                                </a>
                            </div>
                            <div class="alert alert-success  col-md-3" style="height: 200px">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-3x fa-cubes"></i> </button> 
                               <h3><strong>Blox</strong> </h3>
                                 <strong>Blox are Toy-like Blocks; Made up of HTML, CSS, & Javascript. A Blox thats packaged with Xtras are also Powered with PHP server-side logic.</strong>
                                 <a href="xtras" class="btn btn-success btn-lg " data-widgster="restore"  >
                                    <i class="fa fa-cubes"></i> Go to Blox &raquo;
                                </a>
                            </div>
                            <div class="alert alert-warning  col-md-3" style="height: 200px">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-3x fa-magic"></i> </button>
                                <h3><strong>Costumez</strong> </h3>
                                 <strong>Customize the look and feel of your site with Costumez. Choose from many pre-made design from the whole nexus community. </strong>
                                  <a class="btn btn-warning btn-lg " data-widgster="restore">
                                    <i class="fa fa-magic"></i> Go to Costumez &raquo;
                                </a>
                            </div>
                            <div class="alert alert-danger  col-md-3" style="height: 200px">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-3x fa-gears"></i> </button>
                                <h3><strong>Xtras</strong> </h3>
                                <strong> Xtras add extra functionality to your Domain where there was none before. Web applications ranging from Blogs, Shops, Photo Galleries, Calendars etc. </strong>
                                 <a class="btn btn-danger btn-lg " data-widgster="restore">
                                    <i class="fa fa-gears"></i> Go to Xtras &raquo;
                                </a>
                            </div>
                            
                           
                            <!-- <div class="alert alert-info col-md-3" style="background: #7f56bc;">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-desktop"></i> </button>
                                
                                <strong>Welcome Screen</strong> <br/>
                                Give your visitors a very welcoming greeting.
                            </div>
                            <div class="alert alert-success  col-md-3"  style="background: #bc8156;">

                                <strong><i class="fa fa-check"></i> Well done!</strong> You successfully read this important alert message.
                            </div>
                            <div class="alert alert-warning  col-md-3"  style="background: #565bbc;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong><i class="fa fa-bell-o"></i> Warning!</strong> Best check yo self, you're not looking too good.
                            </div>
                            <div class="alert alert-danger col-md-3"  style="background: #bc568d;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-ban"></i> <strong>Oh snap! You got an error!</strong> That was close, here is some more text.
                                
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> 

    
    <?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>12,'method'=>"xtras",'title'=>"Xtras"), 0);?>
    
 
</div>
<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>
<?php }} ?>
