<?php
include_once 'v3c-functions.php';
v3c_session_start();

$_SESSION = array();  // Unset all session values
$params = session_get_cookie_params();  //get session parameters
setcookie(session_name(), '', time() - 42000,
		  $params["path"], 
          $params["domain"], 
		  $params["secure"], 
          $params["httponly"]);
session_destroy();
header('Location: ../index.php');
?>
