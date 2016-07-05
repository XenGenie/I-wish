<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-05 00:22:12
  from "/home/xopher/www/superdomx.com/x/X/xShop/import.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577ae1941cf826_62359121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665bdb82b2f27fc10e230d44d58639321dfc0f20' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/import.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577ae1941cf826_62359121 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.counter.php';
if (!is_callable('smarty_modifier_replace')) require_once '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
?>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['shelf'] > 0) {?>
 	<!-- <?php echo smarty_function_counter(array('start'=>0,'assign'=>'count'),$_smarty_tpl);?>
 -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['shelf'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>  
    <div class="col-md-4">
        <div class="panel product  <?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];?>
 <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>active<?php }?>" id="product-<?php echo md5($_smarty_tpl->tpl_vars['item']->value['sku']);?>
"> 
			<div class="media"> 
				<img src='/<?php echo $_smarty_tpl->tpl_vars['UPLOAD']->value;
echo $_smarty_tpl->tpl_vars['shop']->value['dir']['imports'];
echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
' alt="product title" data-img="product-<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" class="img-responsive" />
				<span class="plabel">
					<p class="name panel">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

					</p>
					<h1 class="price panel"><!-- <span class="cur">$</span> --><span class="total"><?php echo $_smarty_tpl->tpl_vars['item']->value['cost'];?>
</span></h1>
				</span>				
			</div>
			<div class="form-group no-margin">  
				<form action="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/.json" id="form-<?php echo md5($_smarty_tpl->tpl_vars['item']->value['sku']);?>
" method="POST" onsubmit="return window.addToShelf(this,event);"> 
					<div class="input-group input-group-lg">
						<span class="input-group-addon col-md-4">
                            <i class="fa fa-cube"></i>
                        </span>
						<input type="text" class="input-sm form-control  input-transparent" onkeyup="$('#product-<?php echo md5($_smarty_tpl->tpl_vars['item']->value['sku']);?>
 p.name').html(this.value);" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="shelf[name]">

					</div >
					<div class="input-group input-group-lg">
						<span class="input-group-addon col-md-4">
                            <i class="fa fa-dollar"></i>
                        </span>
						<input type="text" class="input-sm form-control  input-transparent" onkeyup="$('#product-<?php echo md5($_smarty_tpl->tpl_vars['item']->value['sku']);?>
 h1 .total').html('$'+this.value);" value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['cost'],'$','');?>
" name="shelf[price]">
						<span class="input-group-addon">
                            .00
                        </span>
					</div>
					<!-- <div class="input-group input-group-lg">
						<span class="input-group-addon">
                            <i class="fa fa-barcode"></i>
                        </span>
						
					</div>
 -->

					<div class="input-group input-group-lg">
						<span class="input-group-addon col-md-4">
	                            <i class="fa fa-tag"></i>
                        </span>
                        <input type="hidden" class="input-sm form-control  input-transparent" <?php if ($_smarty_tpl->tpl_vars['item']->value['cost'] == '0') {?>readonly='true'<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['item']->value['sku'];?>
" name="shelf[sku]">
						<input type="text" class="input-sm form-control  input-transparent" value="<?php if ($_smarty_tpl->tpl_vars['item']->value['tag']) {
echo $_smarty_tpl->tpl_vars['item']->value['tag'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>" name="shelf[tags]">
					</div> 

					<button class="btn btn-bottom btn-lg btn-success qadd" type="submit">
					<i class="glyphicon glyphicon-cloud-upload"></i>
						Add to Shelf
					</button>	
					<button class="btn btn-bottom btn-sm btn-danger" href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/upload/true/&file=<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
&_method=DELETE" id="<?php echo md5($_smarty_tpl->tpl_vars['item']->value['sku']);?>
" onclick="return window.delete<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
(this,event);"  >
					<i class="fa fa-trash-o"></i>
						Remove from Bin
					</button>	
				</form>
			</div>
		</div> 
	</div>
	<!-- <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 --> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php } else { ?>
    	<h2>Nothing to import...</h2>
    <?php }?>


 <?php echo '<script'; ?>
 type="text/javascript">

 	window.delete<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
 = function(a,e) { 
 		var a = $(a);
 		$.ajax({
			type     : 'POST',
			dataType : 'json',
			url      : a.attr('href'),
			success  : function (data) { 
				$("#product-"+a.attr('id')).fadeOut()
			}
 		});

		 

 		e.preventDefault();
 	};

	window.addToShelf = function (f,e) {  
		dataString = $(f).serialize();

		$.ajax({
			type     : "POST",
			url      : $(f).attr("action"),
			data     : dataString,
			dataType : "json",
			success: function(data)
			{

				Messenger().post({
					showCloinseButton : true,
					type            : 'success',
					message         : '<i class="fa fa-check"></i> Item Successfully Imported'
				});

				var p = $(f).attr('id').replace('form','product');
				$('#'+p).fadeOut();
			  // Handle the server response (display errors if necessary)

			 //  $.pjax({

				// container : '.content',
				// fragment  : '.content',
				// timeout   : 5000,
				// url       : window.location.pathname+window.location.search+window.location.hash
			 //  });

				

			}
		});
		e.preventDefault(); 
	};
<?php echo '</script'; ?>
><?php }
}
