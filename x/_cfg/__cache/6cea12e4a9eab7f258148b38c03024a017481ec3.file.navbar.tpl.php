<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-05-31 01:07:40
         compiled from "/home/xopher/www/superdomx.com/x/X/xNavigation/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:423438726574cc7bc4f4664-82687960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cea12e4a9eab7f258148b38c03024a017481ec3' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/X/xNavigation/navbar.tpl',
      1 => 1448770346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '423438726574cc7bc4f4664-82687960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flipBlox' => 0,
    'site_name' => 0,
    'navi' => 0,
    'link' => 0,
    'l' => 0,
    'linktothe' => 0,
    'children' => 0,
    'masterKey' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_574cc7bc746732_24470218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574cc7bc746732_24470218')) {function content_574cc7bc746732_24470218($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['flipBlox'] = new Smarty_variable('navbar-blox', null, 0);?> 
<div class="<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
"> 
  <div class="front"> 
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          <i class="fa fa-home"></i>
          <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav"> 
              <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
                  <?php if ($_smarty_tpl->tpl_vars['link']->value['parent']==0) {?> 
                      <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable(0, null, 0);?>
                      <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
                          <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
                             <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value['id'], null, 0);?>
                          <?php }?>
                      <?php } ?>  

                      <?php if ($_smarty_tpl->tpl_vars['linktothe']->value=='') {?>
                          <?php $_smarty_tpl->tpl_vars['linktothe'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['link']->value['title']), null, 0);?>
                      <?php } else { ?>
                          <?php $_smarty_tpl->tpl_vars['linktothe'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['linktothe']->value)."/".((string)$_smarty_tpl->tpl_vars['link']->value['title']), null, 0);?>

                      <?php }?>

                      
                          <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable(0, null, 0);?>
                          <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
                              <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
                                 <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value['id'], null, 0);?>
                              <?php }?>
                          <?php } ?> 
                          <?php if ($_smarty_tpl->tpl_vars['children']->value>0) {?>  
                          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/<?php echo $_smarty_tpl->tpl_vars['linktothe']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
  
                        <b class="caret"></b></a>
                              <ul class="dropdown-menu"> 
                                  <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
                                      <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
                                         <?php echo $_smarty_tpl->getSubTemplate ("./navi.nest.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('linktothe'=>$_smarty_tpl->tpl_vars['linktothe']->value,'link'=>$_smarty_tpl->tpl_vars['l']->value,'sub'=>true), 0);?>

                                      <?php }?>
                                  <?php } ?>
                              </ul> 
                          <?php } else { ?>
                          <li ><a  href="/<?php echo $_smarty_tpl->tpl_vars['linktothe']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
   </a>
                          <?php }?>
                      </li> 

                  <?php }?> 
              <?php } ?>
          </ul>


          <ul class="nav navbar-nav navbar-right">


            <li class="active">
              <div class="btn-group" style="margin-top: 7px;">
                <!-- Members Tool Bar --> 
                <!-- <a href="./" class="btn btn-primary">
                  <i class="fa fa-key"></i>
                </a>
                <a href="./" class="btn btn-success">
                  <i class="fa fa-key"></i>
                </a>
                <a href="./" class="btn btn-info">
                  <i class="fa fa-key"></i>
                </a>
                <a href="./" class="btn btn-danger">
                  <i class="fa fa-crosshairs"></i> <span class="badge">2</span>
                </a> -->
               <!-- <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="search-query" placeholder="Search...">
                </form> -->
                <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
                  
                   
                   <a class="btn btn-info action">
                    <i class="fa fa-user"></i>
                  </a>
                  <a class="btn btn-success active action" href="/login/logout"  >
                    <i class="fa fa-power-off"></i>
                  </a>
                <?php } else { ?>

                  <a class="btn btn-warning action">
                    <i class="fa fa-key"></i>
                  </a>
                <?php }?>

              </div>
            </li>
          </ul>

          <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
            <!-- <ul class="nav navbar-nav navbar-right pull-right">
                <li class="visible-phone-landscape">
                    <a href="#" id="search-toggle">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Messages" id="messages" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-comments"></i>
                    </a>
                    <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="img/1.jpg" alt="">
                                <div class="details">
                                    <div class="sender">Jane Hew</div>
                                    <div class="text">
                                        Hey, John! How is it going? ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="img/2.jpg" alt="">
                                <div class="details">
                                    <div class="sender">Alies Rumiancaŭ</div>
                                    <div class="text">
                                        I'll definitely buy this template
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="img/3.jpg" alt="">
                                <div class="details">
                                    <div class="sender">Michał Rumiancaŭ</div>
                                    <div class="text">
                                        Is it really Lore ipsum? Lore ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="text-align-center see-all">
                                See all messages <i class="fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" title="8 support tickets" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-group"></i>
                        <span class="count badge">8</span>
                    </a>
                    <ul id="support-menu" class="dropdown-menu support" role="menu">
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                </div>
                                <div class="details">
                                    Check out this awesome ticket
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                </div>
                                <div class="details">
                                    "What is the best way to get ...
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-success"><i class="fa fa-tag"></i></span>
                                </div>
                                <div class="details">
                                    This is just a simple notification
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                </div>
                                <div class="details">
                                    12 new orders has arrived today
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-important"><i class="fa fa-plus"></i></span>
                                </div>
                                <div class="details">
                                    One more thing that just happened
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="text-align-center see-all">
                                See all tickets <i class="fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li class="hidden-xs">
                    <a href="#" id="settings" title="" data-toggle="popover" data-placement="bottom" data-original-title="Settings">
                        <i class="fa fa-cog"></i>
                    </a>
                </li>
                <li class="hidden-xs dropdown">
                    <a href="#" title="Account" id="account" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                    </a>
                    <ul id="account-menu" class="dropdown-menu account" role="menu">
                        <li role="presentation" class="account-picture">
                            <img src="img/2.jpg" alt="">
                            Philip Daineka
                        </li>
                        <li role="presentation">
                            <a href="form_account.html" class="link">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="component_calendar.html" class="link">
                                <i class="fa fa-calendar"></i>
                                Calendar
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="link">
                                <i class="fa fa-inbox"></i>
                                Inbox
                            </a>
                        </li>
                    </ul>
                </li>
                 
            </ul> -->
          <?php }?>

        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </div>
     
  </div>
  <div class="back">
    <?php if (!$_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button> 
            <a class="navbar-brand" href="#">
              <i class="fa fa-user"></i>
              <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
: Login
            </a>
          </div>
          <div class="navbar-collapse collapse" style="padding-top: 7px;">
            <form id="login-form"  role="login" action="./" method="POST">
               
            <div class="row col-md-5" >
                  <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-btn  <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
                    active
                  <?php }?>">
                      <button class="btn btn-primary active disabled" type="button"><i class="fa fa-user"></i></button>
                    </span>
                    <input type="text" class="form-control" name="login[username]">

                    <span class="input-group-btn ">
                      
                     <button class="btn btn-info" type="button"><i class="fa fa-question-circle"></i></button>
                    </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6">
                    <div class="input-group">
                     <span class="input-group-btn  <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
                    active
                  <?php }?>">
                      <button class="btn btn-warning  active disabled" type="button"><i class="fa fa-key"></i></button>
                      
                    </span>
                    <input type="password" class="form-control" name="login[password]">
                    <span class="input-group-btn   <?php if ($_smarty_tpl->tpl_vars['masterKey']->value['is']['user']) {?>
                    active
                  <?php }?>">
                      <button class="btn btn-success" type="submit"><i class="fa fa-unlock"></i></button>
                      
                    </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row --> 
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="btn-group">
               
                <button class="btn btn-danger edit-submit" type="button"><i class="fa fa-ban"></i></button>
                <!-- <button class="btn btn-info" type="button"><i class="fa fa-question-circle"></i></button> -->
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
    <?php } else { ?>
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid ">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" >
             
             <i class="fa  fa-user"></i>
              <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
  
            </a>

          </div>
          <div class="navbar-collapse collapse row"  > 
            
            <!-- <button class="btn btn-info action">
                    <i class="fa fa-recycle"></i>
                  </button>
                <button class="btn btn-info" type="button"><i class="fa fa-question-circle"></i></button>
                <button class="btn btn-danger edit-submit" type="button"><i class="fa fa-mail-forward"></i></button>
 -->
            <ul class="nav navbar-nav navbar-right" style="margin-top: 7px;">
              <li class="btn-group">
               <!--    <button class="btn btn-success action">
                    <i class="fa fa-shield"></i>
                  </button>
                   <button class="btn btn-info action">
                    <i class="fa fa-recycle"></i>
                  </button>
                <button class="btn btn-info" type="button"><i class="fa fa-question-circle"></i></button>
                 -->
                 <button class="btn btn-danger edit-submit" type="button"><i class="fa fa-mail-forward"></i></button>
                <!-- <button class="btn btn-info" type="button"><i class="fa fa-question-circle"></i></button> -->
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
    <?php }?>

    
  </div>


  <script type="text/javascript">
    // set up block configuration
      $('.<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
 .action').click(function(){ 
        $('.<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
').addClass('flip');
      });
      $('.<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
 .edit-submit').click(function(e){ 
        $('.<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
').removeClass('flip');

        // why not update that list for fun?
        
        e.preventDefault();
      });
  </script>
<style type="text/css"> 
  .<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
 {  
    width               : 100%;
    height              : 100%;
    min-width: 100px;
    min-height: 100px;
    margin              : 0;
    position            : relative;
    left                : 0;
    top                 : 0;  
    
    -webkit-perspective : 600px;
    -moz-perspective    : 600px;
    perspective         : 600px;




  }
  /* -- make sure to declare a default for every property that you want animated -- */
  /* -- general styles, including Y axis rotation -- */
 

.<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
 .front { 
  /*overflow: hidden;*/
  float                       : none;
  position                    : absolute;
  top                         : 0;
  left                        : 0;
  z-index                     : 900;
  width                       : inherit;
  height                      : inherit;
  padding-top: 0;
  /*border                      : 0px solid #ccc;*/
  /*background                  : #6b7077;*/
  /*text-align                  : center;*/ 
  /*box-shadow                : 0 1px 5px rgba(0,0,0,0.9);*/

  -webkit-transform           : rotateX(0deg) rotateY(0deg);
  -moz-transform              : rotateX(0deg) rotateY(0deg);
  transform                   : rotateX(0deg) rotateY(0deg);

  -webkit-transform-style     : preserve-3d;
  -moz-transform-style        : preserve-3d;
  transform-style             : preserve-3d;

  -webkit-backface-visibility : hidden;
  -moz-backface-visibility    : hidden;
  backface-visibility         : hidden;

  /* -- transition is the magic sauce for animation -- */
  -webkit-transition          : all .4s ease-in-out;
  transition                  : all .4s ease-in-out;

  background: none;

  }
  .<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
.flip .front { 
  z-index           : 900;
  border-color      : none;
  background        : none;
  /*box-shadow      : 0 15px 50px rgba(0,0,0,0.2);*/
  
  -webkit-transform : rotateY(180deg);
  -moz-transform    : rotateY(180deg);
  transform         : rotateY(180deg);
  }

  .<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
 .back { 
  float                       : none;
  position                    : absolute;
  top                         : 0;
  left                        : 0;
  z-index                     : 800;
  width                       : inherit;
  height                      : inherit;
  border                      : 0;
  /*background                : #333;*/
  border-radius               : 20px;
  
  -webkit-transform           : rotateY(-180deg);
  -moz-transform              : rotateY(-179deg); /* setting to 180 causes an unnatural-looking half-flip */
  transform                   : rotateY(-179deg);

  -webkit-transform-style     : preserve-3d;
  -moz-transform-style        : preserve-3d;
  transform-style             : preserve-3d;

  -webkit-backface-visibility : hidden;
  -moz-backface-visibility    : hidden;
  backface-visibility         : hidden;

  /* -- transition is the magic sauce for animation -- */
  -webkit-transition          : all .4s ease-in-out;
  transition                  : all .4s ease-in-out;


  }

  .<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
.flip .back { 
  z-index           : 1000;
   
  border-radius     : 20px; 
  -webkit-transform : rotateX(0deg) rotateY(0deg);
  -moz-transform    : rotateX(0deg) rotateY(0deg);
  transform         : rotateX(0deg) rotateY(0deg);
  
 
  }
 
 .progress{
  margin: 0 !important;
 }

</style>
<div id="blox<?php echo $_smarty_tpl->tpl_vars['flipBlox']->value;?>
CodeDialogs" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true" style=" height: 85px; overflow: hidden; position: absolute; top: 35%;   background-color : rgba(0,0,0,0.75);">
  <div class=" text-center">
    <a href="#" class="close" data-dismiss="modal">&times;</a>
    <h3 style="color: white;"><a href="#" class="btn btn-danger btn-lg" onclick="closeDialog ();"><i class="fa"></i> On</a></h3>   
  </div> 
</div>


<?php }} ?>
