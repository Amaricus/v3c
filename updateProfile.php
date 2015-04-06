<?php 
session_start();
$db = "belleideeorg.ipagemysql.com";
$user = "brendan";
$dbpw = "Open3Firenze!";
$dbs = "v3c";
$link = mysqli_connect($db, $user, $dbpw, $dbs);

//Get info from customize.php and handle session variables
$motto = $_POST['newMotto'];
$sponsor = $_POST['newSponsor'];
$adLevel = $_POST['adLevel'];
$nymi = $_POST['nymi'];

$handle = $_SESSION['handle'];
$_SESSION['motto'] = $motto;

//update profile table in db
$sql = "UPDATE `PROFILE` 
		SET `motto` = '$motto'
		WHERE `handle` = '$handle';";
$currentRecord = mysqli_query($link, $sql);
if($currentRecord)
{
	mysqli_close($link);
	//redirect to home
	header("Location: http://belle-idee.org/home.php");
	exit();
}
else
{
	die ("Cannot insert to database:" .mysqli_error($link));
}
mysqli_close($link);
?>