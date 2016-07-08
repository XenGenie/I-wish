<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:48:50
  from "/home/xopher/www/superdomx.com/x/html/~blox/godbar/sdx.btn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f06823e4568_66869163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '424b18653941af828eaf26f380150d5b51fe4c02' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~blox/godbar/sdx.btn.tpl',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577f06823e4568_66869163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<button class="btn btn-default admin_menu"  >
  	<span  data-toggle="dropdown" style="position: absolute; top : 0; left: 0; block; width: 100%; height: 100%;"></span>
  	<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=17"> -->

	<!-- <strong class=" text text-success">Super</strong><span class="text-primary">Dom</span>  -->
	<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&w=107">
	<i class="fa fa-cubes"></i> 
	<ul class="dropdown-menu" id="toy-blox-menu">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_menu']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xtras']->value, 'xtra', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['xtra']->value) {
?> 
					<?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon'] && $_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
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
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
				</ul>
				</li> 
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
	</ul>	 	
	</button><?php }
}
