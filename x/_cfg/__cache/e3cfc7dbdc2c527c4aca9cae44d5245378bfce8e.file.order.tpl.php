<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-06-01 04:23:56
         compiled from "/home/xopher/www/superdomx.com/x/X/xShop/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91680778574e473cb05774-42813401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3cfc7dbdc2c527c4aca9cae44d5245378bfce8e' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/order.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91680778574e473cb05774-42813401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'atBackDoor' => 0,
    'order' => 0,
    'Xtra' => 0,
    'XTRA' => 0,
    'method' => 0,
    'LANG' => 0,
    'status' => 0,
    'site_name' => 0,
    'shop_address' => 0,
    'shop_city' => 0,
    'shop_state' => 0,
    'shop_postal' => 0,
    'shop_email' => 0,
    'shop_phone' => 0,
    'shop_fax' => 0,
    'customer' => 0,
    'data' => 0,
    'item' => 0,
    'c' => 0,
    'cents' => 0,
    'shop_tax' => 0,
    'shop_shipping' => 0,
    'total' => 0,
    'tax' => 0,
    'ship' => 0,
    'HTTP_HOST' => 0,
    'stripe_live_test' => 0,
    'key' => 0,
    '($_smarty_tpl->tpl_vars[\'key\']->value)' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574e473cd5bda4_03043457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574e473cd5bda4_03043457')) {function content_574e473cd5bda4_03043457($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/xopher/www/superdomx.com/x/Hydrogen/smarty/libs/plugins/modifier.replace.php';
?>  <div class="col-md-12">
        <section class="widget">
            <div class="body no-margin">
                <div class="row">
                    <div class="col-sm-6 col-print-6">
                        <?php if ($_smarty_tpl->tpl_vars['atBackDoor']->value) {?>
	                        <h1>Order <?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</h1>
	                        <a href="/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/orders"> Return to Orders</a>
                        <?php } else { ?>

                            <?php ob_start();?><?php echo strtoupper($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA'] = new Smarty_variable("X".$_tmp1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['LANG']->value[$_smarty_tpl->tpl_vars['XTRA']->value][$_smarty_tpl->tpl_vars['method']->value]['status'], null, 0);?>

	                        <h1>Order <?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['order']->value['status']];?>
</h1>
	                        <a href="/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/bazaar"> Return to Shop</a>
                        <?php }?>
                    </div>
                    <div class="col-sm-6 col-print-6">
                        <div class="invoice-number text-align-right">
                            
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['timestamp'],'D, M j Y, h:ia');?>

                            
                        </div>
                        <div class="invoice-number-info text-align-right">
                          Invoice #<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['timestamp'],'ymd');?>
O<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>

                        </div>
                    </div>
                </div>
                <hr>
                <!-- <section class="invoice-info widget">
                    <div class="row">
                        <div class="col-sm-6 col-print-6">
                            <h4 class="details-title">Company Information</h4>
                            <h3 class="company-name">
                                <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>

                            </h3>
                            <address>
                                <strong><?php echo $_smarty_tpl->tpl_vars['shop_address']->value;?>
</strong><br>
                                <?php echo $_smarty_tpl->tpl_vars['shop_city']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['shop_state']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['shop_postal']->value;?>
<br>
                                <br>
                                <abbr title="Work email">e-mail:</abbr> <a href="mailto:#"><?php echo $_smarty_tpl->tpl_vars['shop_email']->value;?>
</a><br>
                                <abbr title="Work Phone">phone:</abbr> <?php echo $_smarty_tpl->tpl_vars['shop_phone']->value;?>
<br>
                                
                                <?php if ($_smarty_tpl->tpl_vars['shop_fax']->value) {?><abbr title="Work Fax">fax:</abbr> <?php echo $_smarty_tpl->tpl_vars['shop_fax']->value;?>

                                <?php }?>
                            </address>
                        </div>
                        <div class="col-sm-6 col-print-6 client-details">
                            <h4 class="details-title">Client Information</h4>
                            <h3 class="client-name"> 
                            </h3>
                            <address>
                                 
                                <abbr title="Work email">e-mail:</abbr> <a href="mailto:#"><?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
</a><br>
                                <abbr title="Work Phone">phone:</abbr> <?php echo $_smarty_tpl->tpl_vars['customer']->value['phone'];?>
<br>
                                <abbr title="Work Fax">fax:</abbr> <?php echo $_smarty_tpl->tpl_vars['customer']->value['fax'];?>

                                <div class="separator line"></div>
                                <p class="margin-none"><strong>Note:</strong><br> </p>
                            </address>
                        </div>
                    </div>
                </section> -->
                <table class="table table-bordered widget">
                    <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-3">Item</th>
                        <th class="hidden-xs col-md-3">Description</th>
                        <th class="col-md-1">Quantity</th>
                        <th  align="center" class="hidden-xs col-md-2">Price per Unit</th>
                        <th  align="right" class="col-md-2">Total</th>
                    </tr>
                    </thead> 
                    <tbody>

                    <?php $_smarty_tpl->tpl_vars['cents'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    	<tr>
	                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sku'];?>
</td>
	                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
	                        <td class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
</td>
	                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
	                        <td  align="center" class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
	                        <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['cents']/100, null, 0);?>
	                        <td align="right">$<?php echo number_format($_smarty_tpl->tpl_vars['c']->value,2,'.',',');?>
</td>
	                        <!-- <?php $_smarty_tpl->tpl_vars['cents'] = new Smarty_variable($_smarty_tpl->tpl_vars['cents']->value+$_smarty_tpl->tpl_vars['item']->value['cents'], null, 0);?> -->
	                    </tr>
                    <?php } ?>
                     
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6 col-print-6">
                        <blockquote class="blockquote-sm">
                            <!-- <strong>Note:</strong> Keep in mind, sometimes bad things happen. But it's just sometimes. -->
                        </blockquote>
                    </div>
                    <div class="col-sm-6 col-print-6">
                        <div class="row text-align-right">
                            <div class="col-xs-6"></div> <!-- instead of offset -->
                            <div class="col-xs-3">
                                <p>Subtotal</p>
                                <?php if ($_smarty_tpl->tpl_vars['shop_tax']->value) {?><p>Tax(<?php echo $_smarty_tpl->tpl_vars['shop_tax']->value;?>
)</p><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['shop_shipping']->value) {?><p>Shipping</p><?php }?>
                                <p class="no-margin"><strong>Total</strong></p>
                            </div>
                            <div class="col-xs-3">
                                <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['cents']->value/100.00, null, 0);?> 

                                <?php if ($_smarty_tpl->tpl_vars['shop_tax']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars['tax'] = new Smarty_variable(intval(smarty_modifier_replace($_smarty_tpl->tpl_vars['shop_tax']->value,'%',''))/100*$_smarty_tpl->tpl_vars['total']->value, null, 0);?>
                                    <p>$<?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,'.',',');?>
</p>
                                    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['tax']->value, null, 0);?>
                                <?php }?>
                                
                                <p>$<?php echo number_format($_smarty_tpl->tpl_vars['tax']->value,2,'.',',');?>
 </p>
                                <?php if ($_smarty_tpl->tpl_vars['shop_shipping']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars['ship'] = new Smarty_variable(number_format(intval(smarty_modifier_replace($_smarty_tpl->tpl_vars['shop_shipping']->value,'$','')),2,'.',','), null, 0);?>
                                    <p>$<?php echo $_smarty_tpl->tpl_vars['ship']->value;?>
</p>
                                    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['ship']->value, null, 0);?>
                                <?php }?>
                                <p class="no-margin"><strong>$<?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,'.',',');?>
</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $_smarty_tpl->tpl_vars['cents'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value*100, null, 0);?>
                <div class="invoice-actions text-align-right hidden-print">
                    <button class="btn btn-success btn-lg " onclick='stripe.open({
                        name        : "<?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;?>
",
                        description : "<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
",
                        amount      :  <?php echo $_smarty_tpl->tpl_vars['cents']->value;?>

                    });'>
                       <i class="fa fa-dollar fa-2x pull-right"></i>
                       Purchase
                    </button>
                    <button id="print" class="btn btn-primary btn-lg ">
                       <i class="fa fa-print fa-2x pull-right"></i>
                       Print
                    </button>
                    <!-- <button class="btn btn-danger">
                        <i class="fa fa-arrow-right"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Proceed with Payment
                    </button> -->
                </div>
            </div>
        </section>
    </div>
<!-- page-specific -->


<script src="https://checkout.stripe.com/checkout.js"></script>


<script type="text/javascript">           
      <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable("stripe_".((string)$_smarty_tpl->tpl_vars['stripe_live_test']->value)."_publish", null, 0);?>

      var stripe = StripeCheckout.configure({
        key   : '<?php echo $_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['key']->value)]->value;?>
',
        // image : '/square-image.png',
        token: function(token) {
            // Use the token to create the charge with a server-side script.
            // You can access the token ID with `token.id`
            token.amount = <?php echo $_smarty_tpl->tpl_vars['cents']->value;?>
; 
            // token.address = $('#shipping-address').serializeObject().address;

            $.ajax({
                type     : 'POST',
                url      : '/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/pay/.json',
                data     : token,
                dataType : 'json',
                success : function  (data) {
                    DATA = data;    
                    if(data.success){
                        window.location.href = '/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/thanks/'+data.success;
                    } else {
                        alert(data.error);
                    }
                }
            });
        }
      });


</script>

<script type="text/javascript" src="/x/html/layout/watchtower/js/print.js"></script><?php }} ?>
