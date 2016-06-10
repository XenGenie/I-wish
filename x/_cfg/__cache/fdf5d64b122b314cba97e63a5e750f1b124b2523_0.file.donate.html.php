<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 08:05:54
  from "/home/xopher/www/superdomx.com/templates/donate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fccc2804c33_39072993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf5d64b122b314cba97e63a5e750f1b124b2523' => 
    array (
      0 => '/home/xopher/www/superdomx.com/templates/donate.html',
      1 => 1457941640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fccc2804c33_39072993 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <!-- <form style="position: absolute; top: 45%; right: 0px" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="form-style"> -->
  <!--   <input type="hidden" name="cmd" value="_s-xclick"> -->
  <!--  -->
  <!--   <input type="hidden" name="business" value="cdpollard@gmail.com">  <input type="hidden" name="cmd" value="_s-xclick"> -->
  <!--   <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
  <!--   <input type="image" src="assets/images/other_images/paypal.png" width="200px" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> -->
  <!--   <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
  <!--   <br/> -->
  <!--   <br/> -->
  <!--   <a class="link-scroll btn btn-outline-inverse btn-lg pull-right" href="#join"  -->
  <!--   >join</a> -->
  <!-- </form> -->
<div class="content-wrapper text-right clearfix">
        <!-- <h1 class="section-title"> -->
        <!--   Donate -->
        <!-- </h1> -->
        <!-- <p> -->
        <!-- Thank you for your donation. We rely on the financial support from people like you to keep our cause alive.  -->
        <!-- </p> -->
        <button class="link-scroll btn btn-outline-inverse btn-lg " onclick="populate_and_open_modal(event, 'modal-content-donate');">
          click here to make a donation <i class="fa fa-money"></i>
        </button>
        <div class="content-to-populate-in-modal" id=
        "modal-content-donate">
          <iframe src="/stripe/" width="100%" height="400" frameBorder=0  ></iframe>
        </div>
</div>
<?php }
}
