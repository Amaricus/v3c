<?php
include_once 'v3c-config.php';
$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DATABASE);

if (!$mysqli) { 
    die('Could not connect: ' . mysql_error()); 
} 
//echo 'Connected successfully'; 
mysql_select_db($DATABASE);
?>