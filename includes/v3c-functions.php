<?php
include_once 'v3c-config.php';

///----------------------------------------------------------------------------------------------------------------------------------------------------//

//Author: http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
//Modified: 1/4/2015
//Purpose: Used to check if account has had more than 5 attempts in the last 2 hours
function checkbrute ($user_id, $mysqli)
{
	$now = time(); //Get timestamp of current time
	$valid_attempts = $now - (2 * 60 *60);
	
	if ($stmt = $mysqli->prepare("SELECT time
								  FROME login_attempts
								  WHERE user_id = ?
								  AND time > '$valid_attempts'"))
	{
		$stmt->bind_param('i', $user_id);
		$stmt->execute();
		$stmt->store_result();
		if ($stmt->num_rows > 5)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

///----------------------------------------------------------------------------------------------------------------------------------------------------//

//Author: http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
//Modified: 1/4/2015
//Purpose: Sanitize URL from PHP_SELF
function esc_url($url) 
{
	if ('' == $url)
	{
		return $url;
	}
	
	$url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
	$strip = array('%0d', '%0a', '%0D', '%0A');
	$url = (string) $url;
	
	$count = 1;
	while ($count)
	{
		$url = str_replace($strip, '', $url, $count);
	}
	
	$url = str_replace(';//', '://', $url);
	$url = htmlentities($url);
	$url = str_replace('&amp;', '&#038;', $url);
	$url = str_replace("'", '&#039;', $url);
	
	if ($url[0] !== '/')
	{
		return '';
	}
	else
	{
		return $url;
	}
}
	

///----------------------------------------------------------------------------------------------------------------------------------------------------//

//Author: http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
//Modified: 3/20/2015
//Purpose: Used to check login creds, if account is locked, and adds attempt to db if wrong pw
function login($handle, $password, $mysqli) 
{
	$prep_statement2 = "SELECT user_id, handle, email, password, salt
								  FROM user
								  WHERE handle = ?
								  LIMIT 1";
	$stmt = $mysqli->prepare($prep_statement2);
	if ($stmt)	
	{
		$stmt->bind_param('s', $handle);  //Bind "$handle" to parameter
		$stmt->execute(); 				 //Execute the prepared query.
		$stmt->store_result();
		$stmt->bind_result($user_id, $handle, $email, $db_password, $salt);  //get variables from result
		
		$stmt->fetch();						
		$password = hash('sha512', $password . $salt); //hash pw with unique salt
		if ($stmt->num_rows == 1) 
		{
			if (checkbrute($user_id, $mysqli) == true)
			{
				return false; //account is locked
			}
			else
			{
				if ($db_password == $password)
				{
					// PW is correct
					$user_browser = $_SERVER['HTTP_USER_AGENT'];
					$user_id = preg_replace("/[^0-9]+/", "", $user_id); //XSS Prevention
					$_SESSION['user_id'] = $user_id;
					$handle = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $handle); //XSS Prevention
					$_SESSION['handle'] = $handle;
					$_SESSION['login_string'] = hash('sha512', $password .$user_browser); 
					return true;
					//$inspirator = array();
					//$inspirator[$id] = array('handle' => $handle, 'email' => $email, 'motto' => $motto, 'points' => $points, 'hacks' => $hacks, 'photopath' => $photopath, 'level' => $level, 'nymi' => $nymi, 'sponsor_id' => $sponsor_id);
					//Save the array in $_SESSION
					//$_SESSION['inspirator'] = $inspirator;
					//Login successful.
				}
				else
				{
					// Password not correct, record attempt in DB
					$now = time();
					$mysqli->query("INSERT INTO login_attempts(user_id, time)
									VALUES ('$user_id', '$db_password')");
					return false;
				}
			}
		}
		else
		{
			// No User exists.
			return false;
		}
	}
}

///----------------------------------------------------------------------------------------------------------------------------------------------------//

//Author: http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
//Modified: 1/4/2015
//Purpose:  Checks in user is logged in and using the same browser via the login_string
function login_check($mysqli)
{
	if (isset($_SESSION['user_id'],
			  $_SESSION['username'],
			  $_SESSION['login_string']))
	{
		$user_id = $_SESSION['user_id'];
		$login_string = $_SESSION['login_string'];
		$username = $_SESSION['username'];
		$user_browser = $_SERVER['HTTP_USER_AGENT'];
		
		if ($stmt = $mysqli->prepare("SELECT password
									  FROM members
									  WHERE id = ? LIMIT 1"))
		{
			$stmt->bind_param('i', $user_id);
			$stmt->execute(); //Execute the prepared query.
			$stmt->store_result();
		
			if ($stmt->num_rows == 1)
			{
				$stmt->bind_result($password);
				$stmt->fetch();
				$login_check = hash('sha512', $password . $user_browser);
			
				if ($login_check == $login_string)
				{
					//User is logged in
					return true;
				}
				else
				{
					//User not logged in
					return false;
				}
			}
			else
			{
				//User not logged in
				return false;
			}
		}
		else
		{
			//User not logged in
			return false;
		}
	}
	else
	{
		//User not logged in
		return false;
	}
}

///----------------------------------------------------------------------------------------------------------------------------------------------------//

//Author: http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
//Modified: 1/4/2015
//Purpose:  Starts a secure session or regenerates one
function v3c_session_start()
{
	$session_name = 'v3c_session_id';   // Set a custom session name
    $secure = false; //change to true when using ssl
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
	session_set_cookie_params($cookieParams["lifetime"],
		$cookieParams["path"],
		$cookieParams["domain"],
		$secure,
		$httponly);
	// Sets the session name ot the one set above.
	session_name($session_name);
	session_start();             //Start the PHP session
	session_regenerate_id(true); //Regenerated the session, deleted the old one.
}
?>