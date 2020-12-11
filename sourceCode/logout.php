<?php

  session_start();
  include ('./php_includes/functions.inc.php');
  
  unset($_SESSION['SUCCESS']);
  redirect('./login');
?>