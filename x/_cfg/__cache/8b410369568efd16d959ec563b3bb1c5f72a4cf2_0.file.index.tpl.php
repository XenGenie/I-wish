<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-04 04:38:33
  from "/home/xopher/www/superdomx.com/x/X/xThemes/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_57523f2934d0a0_10557333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b410369568efd16d959ec563b3bb1c5f72a4cf2' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xThemes/index.tpl',
      1 => 1448770332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
    'file:~widgets/col.tpl' => 1,
  ),
),false)) {
function content_57523f2934d0a0_10557333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme', false, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value => $_smarty_tpl->tpl_vars['theme']->value) {
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
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	                    
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
    <?php $_smarty_tpl->_subTemplateRender("file:~widgets/col.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('col'=>12,'method'=>"blueprints",'title'=>"Blueprints Installed "), 0, false);
?>
 
    
</div><?php }
}
