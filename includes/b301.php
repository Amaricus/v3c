<?php
include('v3c-config.php');

if ($_SERVER['SERVER_NAME'] == 'localhost')
  {
	$mysqli = mysql_connect('localhost', 'v3c', 'abc##123');
  }
else
  {
	//$mysqli = mysql_connect('belleideeorg.ipagemysql.com', 'brendan', 'Open3Firenze!');
	$mysqli = mysql_connect('v3cninja.ipagemysql.com', 'v3c_ninja', 'Open3Firenze#');
  }
  
  if (mysqli_connect_errno() !=0)
 {

   $message = mysqli_connect_error(); 
   echo $message;
 }
?>