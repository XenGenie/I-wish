<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-02 08:05:53
  from "/home/xopher/www/superdomx.com/templates/about.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_574fccc14d41a0_26415088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad2b52b7d239034c0d577cc05045f0f312ba1859' => 
    array (
      0 => '/home/xopher/www/superdomx.com/templates/about.html',
      1 => 1457851444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fccc14d41a0_26415088 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-wrapper clearfix wow fadeInDown" data-wow-delay=
"0.3s">
  <div class="carousel slide with-title-indicators max-height"
  data-height-percent="70" data-ride="carousel" id=
  "features-carousel">
    <!-- Indicators - slide navigation -->

    <ol class="carousel-indicators title-indicators">
      <li class="active" data-slide-to="0" data-target=
      "#features-carousel">
        What's a TACP?
      </li>

      <li data-slide-to="1" data-target="#features-carousel">
        Meet the Team
      </li>

      <li data-slide-to="2" data-target="#features-carousel">
        About the Association 
      </li>

    </ol>
    <!-- Wrapper for slides -->

    <div class="carousel-inner">
      <div class="item active">
        <div class="carousel-text-content">
          <!-- <img alt="Lorem Ipsum" class="icon" src="assets/images/other_images/transp-image3.png"> -->
          <!-- <i class="fa fa-crosshairs fa-4x"></i> -->
          <br/><br/><br/>
          <br/><br/><br/>
          <h3 class="title">
            What's a TACP?
          </h3>

          <p>
          A <b>Tactical Air Control Party</b>, commonly abbreviated <b><u>TACP</u></b>, 
          usually consists of a team of two or more 
          United States Air Force Tactical Air Controllers...
          </p>

          <p>
            <a class="btn btn-outline-inverse btn-sm" href=""
            onclick="populate_and_open_modal(event, 'modal-content-2');">
              learn more
              <i class="fa fa-graduation-cap"></i> 
            </a>
          </p>

          <div class="content-to-populate-in-modal" id=
          "modal-content-2">
            <h2>
              Tactical Air Control Party
            </h2>

            <p>
              <img alt="Lorem Ipsum" class=
              "lazy hover_effect pull-left"
              data-img-src=
              "assets/images/other_images/Horse-Patrol-John-Making-Comms2.jpg">
            </p>

            <p class="text-left">
              A TACP sometimes includes an Air Liaison Officer, who is assigned to a U.S. Army combat maneuver unit. TACPs advise ground commanders on the best use of air power. They also establish and maintain command and control communications, control air traffic and naval gunfire and provide precision terminal attack guidance of U.S. and coalition close air support. The career fields first test came during the Korean War and since then TACP’s have deployed and served this country in every single engagement. TACP’s were in Vietnam, Grenada, Panama, Kosovo, Somalia, Iraq, Afghanistan and other operations around the world.
            </p>
          </div>
          <!-- #modal-content-2 -->
        </div>
      </div>
      <!-- .item -->

      <div class="item">
        <div class="carousel-text-content">
          <!-- <img alt="Lorem Ipsum" class="icon" src= -->
          <!-- "assets/images/other_images/transp-image7.png"> -->
          <br/><br/><br/>
          <br/><br/><br/>
          <h3 class="title">
            Meet the Team
          </h3>
          <p class="text-center">
            <b>
              <ul class="inline"> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staff']->value, 'p', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
?>
                  <li>
                    <?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
 
                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </ul>
            </b>
          </p>

          <p>
            <a class="btn btn-outline-inverse btn-sm" href=""
            onclick="populate_and_open_modal(event, 'modal-content-4');">
              "Hello from TACP Association!"
              <i class="fa fa-camera"></i> 
            </a>
          </p>

          <div class="content-to-populate-in-modal" id=
          "modal-content-4">

            <!-- <h1> -->
            <!--   Meet the Team -->
            <!-- </h1> -->
            <p>
              <img alt="Lorem Ipsum" class=
              "lazy hover_effect"
              data-img-src=
              "assets/images/other_images/board.jpg">
            </p>

            <p>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staff']->value, 'p', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['people']) ? $_smarty_tpl->tpl_vars['people']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['p']->value['position']][] = $_smarty_tpl->tpl_vars['p']->value['name'];
$_smarty_tpl->_assignInScope('people', $_tmp_array);
?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
?>
                <h4>
                  <?php echo $_smarty_tpl->tpl_vars['k']->value;?>

                </h4>
                <ul>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'y', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['y']->value) {
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </p>
          </div>
          <!-- #modal-content-4 -->
        </div>
      </div>
      <!-- .item -->

      <div class="item">
        <div class="carousel-text-content">
          <!-- <img alt="Lorem Ipsum" class="icon" src= -->
          <!-- "assets/images/other_images/transp-image3.png"> -->
          <br/><br/><br/>
          <br/><br/><br/>
          <h3 class="title">
            The Association
          </h3>

          <p>
            <b>TACP Association</b> was organized <b>over 16 years ago</b> and formed a new TACP Association at the end of 2009...
          </p>

          <p>
            <a class="btn btn-outline-inverse btn-sm" href=""
            onclick="populate_and_open_modal(event, 'modal-content-3');">
              our history
              <i class="fa fa-map"></i>
            </a>
            <a class="link-scroll btn btn-outline-inverse btn-sm" href="#events"
            >
              current events
              <i class="fa fa-calendar-o"></i>
            </a>
          </p>

          <div class="content-to-populate-in-modal" id=
          "modal-content-3">
            <h1>
              The Association
            </h1>
            <p>
              <img alt="Lorem Ipsum" class=
              "lazy hover_effect pull-left"
              data-img-src=
              "assets/images/other_images/TACP1.jpg">
            </p>
            <p class="text-left"> 
              ... The vision and the focus of the members have since changed; becoming one of helping not only our past and present brothers in arms, but also the communities in which we live. Our community of warriors is small, and TACP has always been one of the smallest careers in the entire scope of the Armed Services. It is that small size that has created that camaraderie upon which our Association is based.
              <br/>
              The fundamental goal of our organization is to provide support to those members and families in their moment of need and to better the communities in which we reside.
            </p> 
          </div>
          <!-- #modal-content-3 -->
        </div>
      </div>
      <!-- .item -->

    </div>
    <!-- .carousel-inner -->
    <!-- Controls -->
    <a class="left carousel-control" data-slide="prev" href=
    "#features-carousel"></a> <a class="right carousel-control"
    data-slide="next" href="#features-carousel"></a> 
  </div>
  <!-- #about-carousel -->
</div>
<!-- .content-wrapper -->
<?php }
}
