<?php

  session_start();
  include ('./php_includes/functions.inc.php');
  
  unset($_SESSION['SUCCESS']);
  unset($_SESSION['EMAIL']);
  unset($_SESSION['USER']);
  unset($_SESSION['LAST_ACTIVE_TIME']);
  redirect('./login');
?>