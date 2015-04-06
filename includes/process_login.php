<?php
include_once 'v3c_connect.php';
include_once 'v3c-functions.php';

v3c_session_start();

if (isset($_POST['handle'], $_POST['p']))
{
	$handle = $_POST['handle'];
	$password = $_POST['p'];
	
	if (login($handle, $password, $mysqli) == true)
	{
			$prep_statement2 = "SELECT  `user_id` ,  `handle` ,  `motto` ,  `v3c` ,  `hacks` ,  `photopath1` ,  `photopath2` ,  `sponsorpath1` ,  `sponsorpath2` ,  `nymi` 
								FROM  `user` 
								WHERE handle = ?
								LIMIT 0 , 1";
			$stmt = $mysqli->prepare($prep_statement2);
			if ($stmt)	
			{
				$stmt->bind_param('s', $handle);  //Bind "$handle" to parameter
				$stmt->execute(); 				 //Execute the prepared query.
				$stmt->store_result();
					$stmt->bind_result($user_id, $handle, $motto, $v3c, $hacks, $photopath1, $photopath2, $sponsorpath1, $sponsorpath2, $nymi);  //get variables from result	
				$stmt->fetch();		
				
				$_SESSION['user_id'] = $user_id;
				$_SESSION_['handle']  = $handle;
				$_SESSION_['motto']  = $motto;
				$_SESSION_['v3c']  = $v3c;
				$_SESSION_['photopath1']  = $photopath1;
				$_SESSION_['photopath2']  = $photopath2;
				$_SESSION_['sponsorpath1']  = $sponsorpath1;
				$_SESSION_['sponsorpath2']  = $sponsorpath2;
				$_SESSION_['nymi']  = $nymi;
			}
			header('Location: ../home.php');
	}
	else
	{
		header('Location: ../passwordlogin.php?error=1');
	}
}

?>