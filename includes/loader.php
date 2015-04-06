<?php
include_once ('v3c_connect.php');
v3c_session_start();
$handle = $_SESSION['handle'];
//pull profile table in db
$sql = "SELECT * FROM `PROFILE` 
		WHERE `handle` = $handle;";
		
$currentRecord = mysqli_query($link, $sql);
if($currentRecord)
{
	
		//Retrieve customer data from the query result and populate the array
	$inspirator = array();
	
	while($record = mysql_fetch_row($dbRecords))
	{
		list($id, $handle, $email, $motto, $points, $hacks, $photopath, $level, $nymi, $sponsor_id, $hh, $st) = $record;
		$inspirator[$id] = array('user_id' => $id, 'handle' => $handle, 'email' => $email, 'motto' => $motto, 'points' => $points, 'hacks' => $hacks, 'photopath' => $photopath, 'level' => $level, 'nymi' => $nymi, 'sponsor_id' => $sponsor_id);
	}
	
	//Save the array in $_SESSION
	$_SESSION['inspirator'] = $inspirator;
	$_SESSION['motto'] = $inspirator[4];
	mysqli_close($link);
	//redirect to home
	header("Location: http://belle-idee.org/home.php");
	exit();
}
else
{
	die ("Cannot pull from database:" .mysqli_error($link));
}
mysqli_close($link);
?>