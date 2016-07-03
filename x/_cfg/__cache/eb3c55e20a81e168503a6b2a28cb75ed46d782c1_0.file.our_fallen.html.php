<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 08:05:53
  from "/home/xopher/www/superdomx.com/templates/our_fallen.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fccc1cab346_49089384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb3c55e20a81e168503a6b2a28cb75ed46d782c1' => 
    array (
      0 => '/home/xopher/www/superdomx.com/templates/our_fallen.html',
      1 => 1457936075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fccc1cab346_49089384 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <article class="section-wrapper clearfix" data-custom-background-img=
        "assets/images/other_images/bg3.jpg" id="featured">
          <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay=
          "0.3s">
            <div class="col-sm-10 col-sm-offset-1 text-center">
              <h1 class="section-title">
                Our Fallen
              </h1>
              <!-- feature columns -->
              <small class="pull-right" style="position: absolute; right: 25px; top: 25px;">
                  scroll &darr;
              </small>

              <section class="feature-columns row clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fallen']->value, 'x', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
?>
                  <?php if (is_numeric($_smarty_tpl->tpl_vars['k']->value)) {?>
                  <article class="feature-col col-md-3">
                    <a class="thumbnail linked" href="" onclick=
                    "populate_and_open_modal(event, 'modal-content-fallen<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
');">
                    <div class="image-container">
                      <img alt="<?php echo $_smarty_tpl->tpl_vars['x']->value['name'];?>
" class="lazy item-thumbnail"
                      data-img-src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;
echo $_smarty_tpl->tpl_vars['x']->value['picture'];?>
" style="">
                    </div>
                    <div class="caption text-center" style="height: 150px;">
                      <h5>
                        <?php echo $_smarty_tpl->tpl_vars['x']->value['name'];?>

                      </h5>
                      <p>
                        <?php echo $_smarty_tpl->tpl_vars['x']->value['kitkia'];?>

                        <br/>
                        <?php echo $_smarty_tpl->tpl_vars['x']->value['dday'];?>

                      </p>
                    </div>
                    <!-- .caption --></a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id=
                    "modal-content-fallen<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                      <img alt="<?php echo $_smarty_tpl->tpl_vars['x']->value['name'];?>
" class="lazy hover_effect "
                      data-img-src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;
echo $_smarty_tpl->tpl_vars['x']->value['picture'];?>
" style="max-width: 100%">
                      <h1>
                        <?php echo $_smarty_tpl->tpl_vars['x']->value['name'];?>

                        <br/>
                        <small>
                        <?php echo $_smarty_tpl->tpl_vars['x']->value['kitkia'];?>
 - <?php echo $_smarty_tpl->tpl_vars['x']->value['dday'];?>
  
                        </small>
                      </h1>

                      <p>
                        <?php echo $_smarty_tpl->tpl_vars['x']->value['desc'];?>

                      </p>
                    </div>
                    <!-- #modal-content-fallen<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 -->
                  </article>
                  <?php }?>
                <!-- feature 3 -->
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </section>
              <!-- end: .feature-columns -->
              <!-- End: Section content to edit -->
                <h3>
                  <i>"NEVER FORGOTTEN"</i>
                </h3>
                                    <hr/>
                <a class="btn btn-outline-inverse link-scroll btn-sm" href="#sponsors"> 
                  &darr; sponsors &darr;
                </a>
            </div>
            <!-- .col-sm-10 -->
          </div>
          <!-- .content-wrapper -->
        </article>
<?php }
}
