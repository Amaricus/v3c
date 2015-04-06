<?php
	include_once 'v3c_connect.php';
	include_once 'v3c-functions.php';
	v3c_session_start();
	//Variables to run main code:
	
	//Need to add sql statement to pull profile info and set it to session variables
	
	//Headers for top 3 inspirations:
	$title1 = "A Statement"; //insert code to grab these from the users db
	$title2 = "A Statement";
	$title3 = "A Statement";
	
	//Profile:
	//Imported at login time by process_login.php
	$user_id = $_SESSION['user_id'];
	$handle = $_SESSION['handle'];
	//$v3c = $_SESSION['v3c'];
	//$motto = $_SESSION['motto'];
	//$top1 =  $_SESSION['top1'];
	//$top2 =  $_SESSION['top2'];
	//$top3 = $_SESSION['top3'];
	$photopath1 = "1"; //$_SESSION['photopath1'];
	$photopath2 = "1"; //$_SESSION['photopath2'];
	$sponsorpath1 = "1"; // $_SESSION['sponsorpath1'];
	$sponsorpath2 = "1"; // $_SESSION['sponsorpath2'];
	$nymi = "1"; // $_SESSION['nymi'];
	//Detail Boxes
	$userImgPath1 = "/img/scuba.jpg";
	$userImgPath2 = "/img/jesuit.png";
	
	//Main Article (use session variables here)
	$title = "Testimony of a Toker";
	$elevation = "300-027-90";
	$extension = "230-040-020-023";
	$tag1 = "Plant_Love";
	$tag2= "7/2/2014";
	$tag3 = "Washington_Ganja";
	$tagLink1 = "";
	$tagLink2 = "";
	$tagLink3 = "";
	$filename = 'content/text/testimony_of_a_toker.txt';
	
	//Inspirators
	$inspirator1 = "3-249-238-042";
	$inspirator2 = "70-002-300";
	$inspirator3 = "23-234";
	
	//Influences:
	$implementer1 = "2-700-023-400-230-230";
	$implementer2 = "72-932-999-329";
	$implementer3 = "30-023";
	
	$implemdenter10 = "%^&-%^&-%^&-%^&!#&-!#&-&$#-!#^-@#$-@#$-%@#-@#!-%@#-&@#-@#$@!-(&2-!#@-#$@-!@#-@#$-!@#!-@#$!-@#$!@-!@@#$-";
	
?>
	