<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 07:04:50
         compiled from "x/html/~blox/godbar/sdx.btn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1277011682565a9582287c20-31753617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08b41e703ee7bcb16772358e5777764a05dd69c9' => 
    array (
      0 => 'x/html/~blox/godbar/sdx.btn.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1277011682565a9582287c20-31753617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thumb' => 0,
    'admin_menu' => 0,
    'key' => 0,
    'item' => 0,
    'xtras' => 0,
    'xtra' => 0,
    'toBackDoor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a95822e5c44_39802775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a95822e5c44_39802775')) {function content_565a95822e5c44_39802775($_smarty_tpl) {?><button class="btn btn-default admin_menu"  >
  	<span  data-toggle="dropdown" style="position: absolute; top : 0; left: 0; block; width: 100%; height: 100%;"></span>
  	<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=17"> -->

	<!-- <strong class=" text text-success">Super</strong><span class="text-primary">Dom</span>  -->
	<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&w=107">
	<i class="fa fa-cubes"></i> 
	<ul class="dropdown-menu" id="toy-blox-menu">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			 

			<?php if ($_smarty_tpl->tpl_vars['key']->value) {?>  
				<li class="dropdown-rightsubmenu">
					<a data-filter="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" href="/blox/qBlox/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 pull-left"></i> <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
  </a>
					<ul class="dropdown-menu">
					<?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?> 
					<?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
						<li class="<?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>text-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>text-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>text-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>text-primary<?php } else { ?>text-default<?php }?>"><a data-filter="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['class'];?>
" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" class="  " > 



								<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
  pull-left"></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
								</a> 
							</li>  
					<?php }?>
				<?php } ?> 
				</ul>
				</li> 
			<?php }?>
		<?php } ?> 
	</ul>	 	
	</button><?php }} ?>
