<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-11-29 07:07:32
         compiled from "/home/xopher/www/superdomx.com/x/X/xNavigation/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951192175565a9624399eb2-02551253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2613e7f6456ec2d33904942b2720876faee5969e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xNavigation/navigation.tpl',
      1 => 1448770346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951192175565a9624399eb2-02551253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TALK' => 0,
    'tpl' => 0,
    'toBackDoor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_565a962445fd57_72425016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a962445fd57_72425016')) {function content_565a962445fd57_72425016($_smarty_tpl) {?>







<?php $_smarty_tpl->createLocalArrayVariable('tpl', null, 0);
$_smarty_tpl->tpl_vars['tpl']->value['tour'] = array('list'=>$_smarty_tpl->tpl_vars['TALK']->value['JUMBO']['BTNS'],'lang'=>$_smarty_tpl->tpl_vars['TALK']->value['JUMBO']);?>

<?php $_smarty_tpl->createLocalArrayVariable('x', null, 0);
$_smarty_tpl->tpl_vars['x']->value['tpl'] = $_smarty_tpl->tpl_vars['tpl']->value;?>

<?php $_smarty_tpl->createLocalArrayVariable('blox', null, 0);
$_smarty_tpl->tpl_vars['blox']->value['div'][] = array('class'=>'col-md-2','tpl'=>array('jumbotron'=>$_smarty_tpl->tpl_vars['TALK']->value['JUMBO']['BTNS']));?>

<?php $_smarty_tpl->createLocalArrayVariable('blox', null, 0);
$_smarty_tpl->tpl_vars['blox']->value['div'][] = array('class'=>'col-md-6','tpl'=>array('list-group'=>$_smarty_tpl->tpl_vars['TALK']->value['JUMBO']['BTNS']));?>



<?php echo $_smarty_tpl->getSubTemplate ("~blox/x.TOUR.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<div class="row">
  <div class="col-md-12">
	<?php echo $_smarty_tpl->getSubTemplate ("~widgets/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
</div>
  
<script type="text/javascript">
	
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



</script>
<script src="/x/html/layout/watchtower/js/list-groups.js" type="text/javascript"> </script><?php }} ?>
