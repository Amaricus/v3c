<?php
include_once 'v3c_connect.php';
include_once 'v3c-config.php';

//Originally seen at http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
//Was a great learning experience, while I hand-typed the code the majority was from the site

$error_msg = "";

if (isset($_POST['handle'], $_POST['email'], $_POST['p']))
{
	//Sanitize and validate teh data passed in
	$handle = filter_input(INPUT_POST, 'handle', FILTER_SANITIZE_STRING);
	$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		//Not a valid email
		$error_msg .= '<p class = "error">The email address you entered is not valid</p>';
	}
	
	$password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
	if (strlen($password) != 128)
	{
		//The hashed pwd should be 128 characters long.
		//If it's not, something really odd has happened
		$error_msg .= '<p class = "error">Invalid password configuration.</p>';
	}
	
	//Username validity and password validity have been checked client side.
	
	$prep_stmt = "SELECT user_id FROM profile WHERE email = ? LIMIT 1";
	$stmt = $mysqli->prepare($prep_stmt);
	
	//Check existing email
	if ($stmt)
	{
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$stmt->store_result();
		
		if($stmt->num_rows ==1)
		{
			//A user with this email address already exists
			$error_msg .= '<p class = "error">A user with this email address already exists.</p>';
			$stmt->close();
		}
		else
		{
		$stmt->close();
		}
	}
	else
	{
		$error_msg .= '<p class = "error">Database error Line 39 / 52</p>';
		$stmt->close();
	}
	
	//check existing username
	$prep_stmt = "SELECT user_id FROM profile WHERE handle = ? LIMIT 1";
	$stmt = $mysqli->prepare($prep_stmt);
	
	if ($stmt)
	{
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$stmt->store_result();
		
			if ($stmt->num_rows == 1)
			{
				//A user with this username already exists
				$error_msg .= '<p class = "error">A user with this handle already exists</p>';
				$stmt->close();
			}
		else
		{
		$stmt->close();
		}
	}
	else
	{
		$error_msg .= '<p class = "error">Database error line 76</p>';
		$stmt->close();
	}
	
	//No errors continue with registration
	if (empty($error_msg))
	{
		//Create a random salt
		$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
		
		//Create salted password
		$password = hash('sha512', $password . $random_salt);
		
		//Insert the new user into the database
		if ($insert_stmt = $mysqli->prepare("INSERT INTO user (handle, email, password, salt)
											 VALUES (?, ?, ?, ?)"))
		{
			$insert_stmt->bind_param('ssss', $handle, $email, $password, $random_salt);
			//Execute the prepared query
			if (! $insert_stmt->execute())
			{
				header('Location: ../error.php?err=Registration failure: INSERT');
			}
		}
		header('Location: ./home.php');
	}
}
?>
			
	
	
