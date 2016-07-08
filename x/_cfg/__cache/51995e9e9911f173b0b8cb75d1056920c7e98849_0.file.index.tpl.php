<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 04:01:38
  from "/home/xopher/www/superdomx.com/x/X/xWwwSetup/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f0982f14c83_25885675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51995e9e9911f173b0b8cb75d1056920c7e98849' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xWwwSetup/index.tpl',
      1 => 1448770367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
  ),
),false)) {
function content_577f0982f14c83_25885675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <!-- <div class="col-md-12">
        <section class="widget">
            <div class="jumbotron">
                <h1><i class="fa fa-wrench"></i> Manage Your WWW Settings</h1>
                <p>
                    
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/buildCss" class="btn btn-success  btn-lg pull-right"> 
						<i class="fa fa-css3"></i> Minify CSS
					</a>
				 
					<a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/buildJs" class="btn btn-info btn-lg pull-right"> 
						<i class="fa fa-coffee"></i> Minify Javascript
					</a>
			 	
					<button onclick="location = '#/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/update/syncDb'" class="btn btn-warning"> 
						Build Missing Tables
					</button>  
                </p>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/access" class="btn btn-info btn-lg"><i class="fa fa-lock"></i> Manage Locks</a>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/access" class="btn btn-warning btn-lg"><i class="fa fa-key"></i> Master Key</a>
            </div>  
        </section>
    </div> -->
</div> 
<?php echo '<script'; ?>
 type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> <?php echo '</script'; ?>
>

<?php }
}
