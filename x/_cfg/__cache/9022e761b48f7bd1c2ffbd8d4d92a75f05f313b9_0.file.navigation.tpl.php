<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 06:50:21
  from "/home/xopher/www/superdomx.com/x/X/xNavigation/navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f310df33619_40294119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9022e761b48f7bd1c2ffbd8d4d92a75f05f313b9' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xNavigation/navigation.tpl',
      1 => 1448770346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~blox/x.TOUR.tpl' => 1,
    'file:~widgets/tabs.tpl' => 1,
  ),
),false)) {
function content_577f310df33619_40294119 (Smarty_Internal_Template $_smarty_tpl) {
?>








<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['tpl']) ? $_smarty_tpl->tpl_vars['tpl']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['tour'] = array('list'=>$_smarty_tpl->tpl_vars['TALK']->value['JUMBO']['BTNS'],'lang'=>$_smarty_tpl->tpl_vars['TALK']->value['JUMBO']);
$_smarty_tpl->_assignInScope('tpl', $_tmp_array);
?>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['x']) ? $_smarty_tpl->tpl_vars['x']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['tpl'] = $_smarty_tpl->tpl_vars['tpl']->value;
$_smarty_tpl->_assignInScope('x', $_tmp_array);
?>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['blox']) ? $_smarty_tpl->tpl_vars['blox']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['div'][] = array('class'=>'col-md-2','tpl'=>array('jumbotron'=>$_smarty_tpl->tpl_vars['TALK']->value['JUMBO']['BTNS']));
$_smarty_tpl->_assignInScope('blox', $_tmp_array);
?>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['blox']) ? $_smarty_tpl->tpl_vars['blox']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['div'][] = array('class'=>'col-md-6','tpl'=>array('list-group'=>$_smarty_tpl->tpl_vars['TALK']->value['JUMBO']['BTNS']));
$_smarty_tpl->_assignInScope('blox', $_tmp_array);
?>



<?php $_smarty_tpl->_subTemplateRender("file:~blox/x.TOUR.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="row">
  <div class="col-md-12">
	<?php $_smarty_tpl->_subTemplateRender("file:~widgets/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
</div>
  
<?php echo '<script'; ?>
 type="text/javascript">
	
	window.navi = {
		newLink : function () {
			var a,b,c;

			a = {
				title : prompt("Give the New Page a Title")
			};

			if(a != ''){

				$.ajax({
					type     : "POST",
					url      : '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/navigation/newLink/.json',
					data     : a,
					dataType : "json",
					success: function(data)
					{

					  $.pjax({ 
						container : '.content',
						fragment  : '.content',
						timeout   : 5000,
						url       : window.location.pathname+window.location.search+window.location.hash
					  });
					  // Handle the server response (display errors if necessary)

					  // $.pjax({

					  //   container : '.content',
					  //   fragment  : '.content',
					  //   timeout   : 5000,
					  //   url       : window.location.pathname+window.location.search+window.location.hash
					  // });

					}
				});


			}
		}
	}; 

	$('.dd').on('change', function() {
		
		/* on change event */
		var on  = $("#nestable1").nestable('serialize');
		var off = $("#nestable2").nestable('serialize');


		$.ajax({
			type     : "POST",
			url      : '/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/navigation/updateNest/.json',
			data     : { 
				on  : on,
				off : off
			},
			dataType : "json",
			success: function(data)
			{

			  // $.pjax({ 
			  //   container : '.content',
			  //   fragment  : '.content',
			  //   timeout   : 5000,
			  //   url       : window.location.pathname+window.location.search+window.location.hash
			  // });
			  // Handle the server response (display errors if necessary)

			  // $.pjax({

			  //   container : '.content',
			  //   fragment  : '.content',
			  //   timeout   : 5000,
			  //   url       : window.location.pathname+window.location.search+window.location.hash
			  // });

			}
		});

	});



<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/x/html/layout/watchtower/js/list-groups.js" type="text/javascript"> <?php echo '</script'; ?>
><?php }
}
