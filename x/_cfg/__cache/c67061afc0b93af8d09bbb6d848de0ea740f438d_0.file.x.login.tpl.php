<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-04 22:56:55
  from "/home/xopher/www/superdomx.com/x/X/xLogin/x.login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577acd97abd660_76169680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c67061afc0b93af8d09bbb6d848de0ea740f438d' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xLogin/x.login.tpl',
      1 => 1467665814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577acd97abd660_76169680 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="
  col-md-4 col-md-offset-4
  col-sm-6 col-sm-offset-2
  col-xs-11
">
    <section class="widget login-widget">
        <header class="text-align-center">
           <!--  <div class="widget-controls">
                <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a> 
                <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a> 
            </div> -->
            <img src="/bin/images/logos/sdx.png" style="max-width: 88%">
            <br/>
            <br/>
            <h5 >
            <!-- Area Secure -->
            <!-- <i class="fa fa-lock text-success "></i> -->
            <!-- Please login to continue. -->
            </h5>
            <!-- <h2><?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;?>
</h2> -->
        </header>
        <div class="body">
            <form id="box-login" class="" action="/.json" method="POST" onsubmit="return window.login.submit(this);">
                <fieldset>
                    <div class="form-group ">
                        <!-- <label for="password" >ID</label> -->
                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                            <input name="login[username]" id="login[username]" type="text" class="form-control input-transparent input-lg"
                                   placeholder="<?php if (!$_smarty_tpl->tpl_vars['SUPER_ADMIN']->value) {?>Alias<?php } else { ?>Alias or Email<?php }?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="password" >Password</label> -->
                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-key"></i>
                                </span>
                            <input name="login[password]" id="login[password]" type="password" class="form-control input-transparent input-lg"
                                   placeholder="Enter your pass key">
                        </div>
                    <?php if ($_smarty_tpl->tpl_vars['SUPER_ADMIN']->value === false) {?>
                    
                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                            <input name="login[confirm]" id="login[confirm]" type="password" class="form-control input-transparent input-lg"
                                   placeholder="Confirm Key">
                        </div>
     

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            <input name="login[email]" id="login[email]" type="email" class="form-control input-transparent input-lg"
                                   placeholder="Email">
                        </div>
                    <?php }?>
                    </div>
                </fieldset>
                <div class="form-actions">
                    <!-- <button type="submit" class="btn btn-block btn-lg btn-danger">
                        <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                        <small>Sign In</small>
                    </button> -->

                    <button type="submit" class="btn btn-block  btn-lg btn-success ">
                       Unlock 
                        <span class="w-small-circle pull-left" style="">
                            <i class="fa fa-lock"></i>
                        </span>
                    </button>
                     <!-- <button type="submit" class="btn  btn-block  btn-info ">
                        <i class="fa fa-question"></i>
                        Forgot
                    </button> -->
                    <div class="forgot"><a class="forgot" href="#">Forgot Username or Password?</a></div>
                </div>
            </form>
        </div>
        <footer>
            <!-- <div class="facebook-login">
                <a href="index.html">
                    <span>
                        <i class="fa fa-facebook-square fa-lg"></i> LogIn with Facebook</span>
                </a>
            </div> -->
        </footer>
    </section>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    // $(document).ready(function(){
    //     if(!$('body').hasClass('sidebar-hidden')){
    //         // $('body').addClass('sidebar-hidden');
    //     }
    // });
    window.login = {
        submit : function (e) {
            E = e;
            // var postData = $(this).serializeArray();
            // var formURL = $(this).attr("action");
              //e.preventDefault();
              dataString = $("#box-login").serialize();

              $.ajax({
                type     : "POST",
                url      : $("#box-login").attr("action"),
                data     : dataString,
                dataType : "json",
                success: function(data)
                {
                  // Handle the server response (display errors if necessary)

                  if(data.success){
                    $.pjax({ 
                        container : '.content',
                        fragment  : '.content',
                        timeout   : 5000,
                        url       : window.location.pathname+window.location.search+window.location.hash
                      });  
                  }else{
                    alert(data.error);
                  }

                  

                }
              });
            return false;
        }
    };
<?php echo '</script'; ?>
>
<?php }
}
