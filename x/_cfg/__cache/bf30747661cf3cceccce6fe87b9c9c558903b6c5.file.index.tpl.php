<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-30 01:31:56
         compiled from "/home/xopher/www/superdomx.com/x/X/xWwwSetup/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1910060298574b7bec756a89-03672800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf30747661cf3cceccce6fe87b9c9c558903b6c5' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xWwwSetup/index.tpl',
      1 => 1448770367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1910060298574b7bec756a89-03672800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toBackDoor' => 0,
    'Xtra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574b7bec7a1ba5_98808432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574b7bec7a1ba5_98808432')) {function content_574b7bec7a1ba5_98808432($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('~widgets/billboard.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>

<?php }} ?>
