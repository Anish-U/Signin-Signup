<?php

if(!isset($_SESSION['SUCCESS'])) {
  redirect('./login');
}

if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
  if((time() - $_SESSION['LAST_ACTIVE_TIME']) > 950) {
    redirect('./logout');
  }
}

$_SESSION['LAST_ACTIVE_TIME'] = time();


?>