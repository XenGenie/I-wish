<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-01 04:23:37
         compiled from "/home/xopher/www/superdomx.com/x/X/xShop/import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2070056083574e472993ce96-72070528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09236875de94aa52afe372682a686512136c807' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/import.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2070056083574e472993ce96-72070528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'count' => 0,
    'UPLOAD' => 0,
    'shop' => 0,
    'toBackDoor' => 0,
    'Xtra' => 0,
    'method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574e4729a984b4_73590048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574e4729a984b4_73590048')) {function content_574e4729a984b4_73590048($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/function.counter.php';
if (!is_callable('smarty_modifier_replace')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
?>	<?php if ($_smarty_tpl->tpl_vars['data']->value['shelf']>0) {?>
 	<!-- <?php echo smarty_function_counter(array('start'=>0,'assign'=>'count'),$_smarty_tpl);?>
 -->
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['shelf']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>  
    <div class="col-md-4">
        <div class="panel product  <?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];?>
 <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?>active<?php }?>" id="product-<?php echo md5($_smarty_tpl->tpl_vars['item']->value['sku']);?>
"> 
			<div class="media"> 
				<img src='/<?php echo $_smarty_tpl->tpl_vars['UPLOAD']->value;?>
<?php echo $_smarty_tpl->tpl_vars['shop']->value['dir']['imports'];?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
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
                        <input type="hidden" class="input-sm form-control  input-transparent" <?php if ($_smarty_tpl->tpl_vars['item']->value['cost']=='0') {?>readonly='true'<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['item']->value['sku'];?>
" name="shelf[sku]">
						<input type="text" class="input-sm form-control  input-transparent" value="<?php if ($_smarty_tpl->tpl_vars['item']->value['tag']) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['tag'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?>" name="shelf[tags]">
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
    <?php } ?>
    <?php } else { ?>
    	<h2>Nothing to import...</h2>
    <?php }?>


 <script type="text/javascript">

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
</script><?php }} ?>
