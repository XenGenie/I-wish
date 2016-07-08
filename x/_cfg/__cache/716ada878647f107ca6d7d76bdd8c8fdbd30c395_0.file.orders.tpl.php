<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 06:51:49
  from "/home/xopher/www/superdomx.com/x/X/xShop/orders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f3165ca8170_30748070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716ada878647f107ca6d7d76bdd8c8fdbd30c395' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xShop/orders.tpl',
      1 => 1448770359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:~widgets/billboard.tpl' => 1,
  ),
),false)) {
function content_577f3165ca8170_30748070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:~widgets/billboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('size'=>12), 0, false);
?>

<div class="widget large map">
    <div id="location"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	window.addMarker = function(results){
        if ( !results ) return;
        $(this).gmap3({
            marker:{
                latLng:results[0].geometry.location
            },
            map:{
                options:{
                    center: results[0].geometry.location,
                    zoom: 2
                }
            }
        });
    }

    window.zoomToMarker = function(results){
        if ( !results ) return;
        $(this).gmap3({
            marker:{
                latLng:results[0].geometry.location
            },
            map:{
                options:{
                    center: results[0].geometry.location,
                    zoom: 7
                }
            }
        });
    }
<?php echo '</script'; ?>
>

<div class="row">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'o', false, 'mark');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value => $_smarty_tpl->tpl_vars['o']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('id', substr(md5($_smarty_tpl->tpl_vars['mark']->value),0,7));
?>
		<div class="col-md-6">
	        <section class="widget">
	            <header>
	                <h4>
	                    <i class="fa fa-map-marker"></i>
	                    <?php echo $_smarty_tpl->tpl_vars['o']->value['primary_street_line'];?>
 <?php echo $_smarty_tpl->tpl_vars['o']->value['municipality_major'];?>
, <?php echo $_smarty_tpl->tpl_vars['o']->value['district'];?>
 <?php echo $_smarty_tpl->tpl_vars['o']->value['postal'];?>

	                </h4>
	                 
	            </header>
	            <div class="body">
	                <div class="map" style="height: 150px">
	                    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></div>
	                </div>
	                <div class="form-group no-margin">  
						<form action="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
/.json" id="form-<?php echo $_smarty_tpl->tpl_vars['item']->value['sku'];?>
" onsubmit="window.x.save(this,event,orders.call,orders.b4);"> 
							 
							<div class="input-group input-group-lg">
								<span class="input-group-addon">
		                            <i class="fa fa-truck fa-flip-horizontal"></i>
		                        </span>
								<input type="text" class="input-sm form-control  input-transparent" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['tracking_numbers'];?>
" name="order[tracking_numbers]">
							</div> 

							<button class="btn btn-bottom btn-success qadd" type="submit">
								<i class="fa fa-truck"></i> Send Order
							</button>	
							<a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/order/<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
" class="btn btn-bottom btn-sm btn-info qadd">
								<i class="fa fa-eye"></i> View Order
							</a>	
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
" name="order[id]">
						</form>
					</div>
	            </div>
	            <?php echo '<script'; ?>
 type="text/javascript">
		            $('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').width("100%").height("100%").gmap3({
		            	getlatlng : {
							address  :  "<?php echo $_smarty_tpl->tpl_vars['o']->value['primary_street_line'];?>
 <?php echo $_smarty_tpl->tpl_vars['o']->value['postal'];?>
",
							callback :  window.zoomToMarker
		            	} 
		            });
	            <?php echo '</script'; ?>
>
	        </section>
	    </div> 
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	 
</div> 

        <?php echo '<script'; ?>
 type="text/javascript">
        	orders = {
                b4 : function (f,e){
                    this.i = $(f).find('button[type="submit"] i');
                    this.i.class = this.i.attr('class');
                    this.i.attr('class','fa fa-spinner fa-spin');
                },
                call : function(f,e){
                    this.i.attr('class',this.i.class);
                }
            };


        	if(typeof(google) == 'undefined'){
        		var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'http://maps.google.com/maps/api/js?sensor=false&language=en&' +
                    // 'callback=mapsPageLoad';
                document.body.appendChild(script); 
        	}

	        $(document).ready(function  () { 
	        	$('#location').width("100%").height("100%").gmap3({
	        		map:{
                        options : {
							navigationControl      : false, 
							streetViewControl      : false,
							mapTypeControl         : false,
							disableDoubleClickZoom : false,
							scrollwheel            : false,
		        		}
                    } 
	        	});
  				var a = 0;
			    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'o', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['o']->value) {
?>
				    a = "<?php echo $_smarty_tpl->tpl_vars['o']->value['primary_street_line'];?>
 <?php echo $_smarty_tpl->tpl_vars['o']->value['postal'];?>
"; 
				    $("#location").gmap3({
		                getlatlng : {
							address  :  a,
							callback :  window.addMarker
		            	},
                        map:{
                            options : {
                                navigationControl      : false, 
                                streetViewControl      : false,
                                mapTypeControl         : false,
                                disableDoubleClickZoom : false,
                                scrollwheel            : false,
                            }
                        } 
		            });

		             console.log("Marked: "+a); 
	            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	            // PjaxApp.onPageLoad(mapsPageLoad);
	        }); 
	         // PjaxApp.onPageLoad(mapsPageLoad); 
        <?php echo '</script'; ?>
>
<!-- 
<div class="content container">
        
        <div class="row">
            <div class="col-md-6">
                <section class="widget large">
                    <header>
                        <h4>
                            <i class="fa fa-google-plus"></i>
                            Google maps. Basic
                        </h4>
                    </header>
                    <div class="body">
                        <div class="map">
                            <div id="basic"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <section class="widget large">
                    <header>
                        <h4>
                            <i class="fa fa-arrow-right"></i>
                            Region vector map
                        </h4>
                        <div class="actions">
                            <select id="part" class="selectpicker"
                                    data-style="btn-success btn-sm">
                                <option value="europe_en">Europe</option>
                                <option value="usa_en">USA</option>
                                <option value="australia_en">Australia</option>
                            </select>
                        </div>
                    </header>
                    <div class="body">
                        <div class="map">
                            <div id="vector-detailed"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget large">
                    <header>
                        <h4>
                            <i class="fa fa-dashboard"></i>
                            World vector map
                        </h4>
                    </header>
                    <div class="body">
                        <div class="map">
                            <div id="vector-world"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
 --><?php }
}
