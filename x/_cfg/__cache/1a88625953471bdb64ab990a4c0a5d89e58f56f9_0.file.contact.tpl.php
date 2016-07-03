<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 08:05:55
  from "/home/xopher/www/superdomx.com/x/html/twilli_air/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fccc31f1cb5_98039288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a88625953471bdb64ab990a4c0a5d89e58f56f9' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/twilli_air/contact.tpl',
      1 => 1464847541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fccc31f1cb5_98039288 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper clearfix">
  <h1 class="section-title">
    Contact
  </h1>
  <!-- CONTACT DETAILS -->
  <div class="contact-details col-sm-5 col-md-3">
    <address>
      <?php echo $_smarty_tpl->tpl_vars['info']->value['street']['html'];?>

      <?php echo $_smarty_tpl->tpl_vars['info']->value['city']['html'];?>
, <?php echo $_smarty_tpl->tpl_vars['info']->value['state']['html'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['zipcode']['html'];?>

    </address>
    <p>
      <a href="tel:<?php echo $_smarty_tpl->tpl_vars['info']->value['phone']['html'];?>
">
      Phone: <?php echo $_smarty_tpl->tpl_vars['info']->value['phone']['html'];?>

      </a>
    </p>
    <p>
      <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['info']->value['email']['html'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['info']->value['email']['html'];?>

      </a>
    </p>
  </div>
  <!-- END: CONTACT DETAILS -->
  <!-- CONTACT FORM -->
  <div class="col-sm-7 col-md-9">
    <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->
    <form class="form-style validate-form clearfix" action="assets/php/mail.php" method="POST" role="form">
      <!-- form left col -->
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="text-field form-control validate-field required" data-validation-type="string" id="form-name" placeholder="Full Name" name="name">
        </div>
        <div class="form-group">
          <input type="email" class="text-field form-control validate-field required" data-validation-type="email" id="form-email" placeholder="Email Address" name="email">
        </div>
        <div class="form-group">
          <input type="tel" class="text-field form-control validate-field phone" data-validation-type="phone" id="form-contact-number" placeholder="Contact Number" name="contact_number">
        </div>
        <div class="form-group text-right">
          <img id="form-captcha-img" src="assets/php/form_captcha/captcha_img.php">
          <input type="text" class="text-field form-control validate-field required" data-validation-type="captcha" id="form-captcha" placeholder="Enter text" name="captcha">
          <span id="form-captcha-refresh" class="fa fa-refresh" title="Reload"></span>
        </div>
      </div><!-- end: form left col -->
      <!-- form right col -->
      <div class="col-md-6">
        <div class="form-group">
          <textarea placeholder="Message..." class="form-control validate-field required" name="message"></textarea>
        </div> 
        <div class="form-group">
          <img src="assets/images/theme_images/loader-form.GIF" class="form-loader">
          <button type="submit" class="btn btn-sm btn-outline-inverse">Submit</button>
        </div> 
        <div class="form-group form-general-error-container"></div>           
      </div><!-- end: form right col -->
    </form>
  </div><!-- end: CONTACT FORM -->
</div><!-- .content-wrapper -->
<?php }
}
