<?php
/**Global variables
Edited: 2/23/2015
---Integrated into full build of bn and be.
Edited: 1/4/2015
---Created the document, added db connection variables
*/
if ($_SERVER['SERVER_NAME'] == 'localhost')
{
	$HOST = 'localhost';
	$USER = 'ninja';
	$PASSWORD = 'Open3Firenze$';
	$DATABASE = 'v3c_ninja';
	}
	else
	{
	//Bella.ninja
	$HOST = 'v3cninja.ipagemysql.com';
	$USER = 'v3c_ninja';
	$PASSWORD = 'Open3Firenze#';
	$DATABASE = 'v3c_ninja';

	//Belle-Idee
	//$HOST = 'belleideeorg.ipagemysql.com';
	//$USER = 'brendan';
	//$PASSWORD = 'Open3Firenze#';
	//$DATABASE = 'v3c';
	}

$BUILD = "0000002a"; //Used to verify code running on belle is running latest version_compare	
							   //Also used for documentation (Latest is first shown below rest are shown in documentation file ->release_doc.txt
							   //0000002a = Added password and auth module
							   //0000001a = Created
?>						 