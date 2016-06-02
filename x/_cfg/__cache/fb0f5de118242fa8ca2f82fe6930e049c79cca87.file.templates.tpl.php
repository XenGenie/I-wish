<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 11:00:32
         compiled from "/home/xopher/www/superdomx.com/x/X/xBlox/templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:844225388574c0130f30525-51558198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb0f5de118242fa8ca2f82fe6930e049c79cca87' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xBlox/templates.tpl',
      1 => 1448770332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '844225388574c0130f30525-51558198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themes' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574c013108d714_14769103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574c013108d714_14769103')) {function content_574c013108d714_14769103($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
    <div class="col-md-12">
        <section class="widget widget-tabs">
            <header>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#stats" data-toggle="tab">
                        	Themes
                        	<span class="label label-info">
                        	<?php echo count($_smarty_tpl->tpl_vars['themes']->value);?>

                        	</span>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add New... <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li ><a href="#dropdown1" data-toggle="tab">Featured</a></li>
                            <li ><a href="#dropdown2" data-toggle="tab">Popular</a></li>
                            <li>
                                <a href="#report" data-toggle="tab">Latest</a>
                            </li>
                            <li>
                                <a href="#report" data-toggle="tab">Filter...</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <div class="body tab-content">
                <div id="stats" class="tab-pane active clearfix">
             		<ul class="row thumbnails">
                        <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
 $_smarty_tpl->tpl_vars['t']->value = $_smarty_tpl->tpl_vars['theme']->key;
?>
                            
                            <li class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="" alt="">
                                    <div class="caption">
                                        <h4><?php echo ucwords($_smarty_tpl->tpl_vars['theme']->value);?>
</h4>
                                        <!-- <p><strong>You will never know exactly how something will go until you try it.</strong> You can think three hundred times and still have no precise result... </p> -->
                                        <p class="pull-right">
                                            <a href="#" class="btn btn-success">
                                                Activate
                                            </a>
                                            <a href="/x/html/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/index.html" target="_blank" class="btn btn-info">
                                                Live Preview
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
	                    
	                </ul>
                </div>
                <div id="report" class="tab-pane">
                    <div style="font-size: 240px; text-align: center; color: #56bc76; text-shadow: 2px 2px 2px #000000; height: 280px;">
                        <i class="fa fa-picture-o"></i>
                    </div>
                </div>
                <div id="dropdown1" class="tab-pane">
                    <p>The same thing is for startups and ideas. If you have an idea right away after it appears
                        in your mind you should go and make a first step to implement it. If you will think too
                        much it will sink in the swamp of never implemented plans and ideas or will just go away
                        or will be implemented by someone else.</p>
                    <p><strong>5 months of doing everything to achieve nothing.</strong></p>
                    <p>I had an idea named Great Work. It was a service aimed to help people find their passion.
                        Yes I know it sound crazy and super naïve but I worked on that. I started to work on
                        planning, graphics, presentations, pictures, descriptions, articles, investments and so
                        on. I worked on everything but not the project itself</p>
                    <div>
                        <button class="btn btn-danger">Some button</button>
                        <button class="btn btn-default">Cancel</button>
                    </div>
                </div>
                <div id="dropdown2" class="tab-pane">
                    <p>I realized really simple thing recently. Try is million times better than think. The real world is much more representative than any models either they are built in mind or on the shit of paper.</p>
                    <div>
                        <button class="btn btn-warning btn-block">Some button</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="row">        
    <?php echo $_smarty_tpl->getSubTemplate ("~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('col'=>12,'method'=>"blueprints",'title'=>"Blueprints Installed "), 0);?>
 
    
</div><?php }} ?>
