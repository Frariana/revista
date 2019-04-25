<?php
  require_once 'config/config.php';
  require_once 'helpers/helper.php';
   // require_once 'lib/db.php';
   // require_once 'lib/controller.php';
   // require_once 'lib/core.php';
   // require_once 'lib/session.php';
  #Autoload php
  spl_autoload_register(function($nameClass){
   require_once 'lib/'.$nameClass.'.php';
  });
?>