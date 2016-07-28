<?php
  // Ready.
  require("_cfg/lang.cfg");
  require("_cfg/x.cfg");

  $lib      = $cfg['dir']['libs'];
  $engine   = "{$lib}/x4deep/xengine.php";
  $firephp  = "{$lib}/firephp/lib/FirePHPCore/FirePHP.class.php";

  if( is_dir($lib) && is_dir($cfg['dir']['Xtra'])  && is_file($engine) ){
    require($engine);
    require($firephp);

    // Set
    $X = new Xengine($cfg);

    // GO!
    $X->knock();
  }else{
    require $cfg['dir']['backdoor']."/install.php";
  }
?>
