<?php
include_once 'includes/register.php';
include_once 'includes/v3c-functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Joining Belle Idee</title>
		<script type= "text/JavaScript" src = "js/sha512.js"></script>
	   <script type= "text/JavaScript" src = "js/forms.js"></script>
	  <link rel = "stylesheet" type = "text/css" href = "visual/v3c_desktop.css"><!--finish mobile and add PHP to change here--> 
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
	  </script>
	  <script type = "text/javascript" src = "visual/div_control.js">	
	</script>
  </head>
  <!--
	Date Created: 4/4/2014
	Last Updated: 3/17/2015  *Integrated with login process (+bug fixes and reworked login flow)
	Comments on code/site can be sent to support@belle-idee.org
  -->
<body>
  <div id = "container">
  
<!--00000000000333333333300000000000003333333333333300000000000333333333333000000000000033333333330000000000000000033333333333000000000000000-->
<!-- <---<---<	Left Side  <---<---<    --!>
<!--00000000000000000000000000777777777777777777777777777000000000000000000000000000000000777777777777777777770000000000000000000077777777777-->
	<div class = "home-left2">
	<!--
		<input type = "text" name = "search">
		<button type = "button" class = "button_connector">Search</button>
		<button type = "button" class = "button_connector">Settings</button>
		-->Please sign in to access menu
	</div>
   <div class = "main-left2">
		<h1>Zoko</h1>
		<?php/*
if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
    echo "CRYPT_BLOWFISH is enabled!";
}else {
echo "CRYPT_BLOWFISH is not available";
}*/
?>
		<button type = "button" class = "button_elevate">7,111,111,373,232</button>
			<ul>
				<li class = "left">echo motto</li>
				<li class = "left">echo motto</li>				
			</ul>
			<hr/>
			<h3>Top Three:</h3>
			<ul>
				<li class = "left"><button type = "button" class = "button_implement">7,111,111,373,232</button></li>
				<li class = "left"><button type = "button" class = "button_implement">71,111,317</button></li>
				<li class = "left"><button type = "button" class = "button_implement">71,323</button></li>
			</ul>
			<br/>
			<hr/>
			<br/>
		<img src = "img/yang.png" style = "height: 200px; width: 300px;">
	</div>
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000037-->
<!-- >                                   -------	Middle (Inside)  -------<    --!>
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000073-->

	<div class = "main">
	
	<?php
	if (!empty($error_msg))
	{
		echo $error_msg;
	}
	?>
  <h1>Get ready to start inspiring!</h1>
  <h3>Hover/Touch below for guidelines</h3>

  <form action = "<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method = "post" name = "registration_form">
	<table class = "input">
	<tr><td>Handle:</td><td><input type = "text" name = "handle" id = "handle" /></td></tr>
	<tr><td>Email: </td><td><input type = "text" name = "email" id = "email"/></td></tr>
	<tr><td>Password: </td><td><input type = "password" name = "password" id = "password"/></td></tr>
	<tr><td>Confirm password: </td><td><input type = "password" name = "confirmpwd" id = "confirmpwd"/></td></tr>
	<!--Submit button-->
	<tr><td></td><td><input type = "button" class = "button_connector" value = "Register" onclick = "return regformhash(this.form, 
																									   this.form.handle,
																									   this.form.email,
																									   this.form.password,
																									   this.form.confirmpwd);" /></td></tr>
	<!--Submit button-->																		
  </table>
  </form>
  
  
		  <div class = "innerMainRegister">
		  <br/>

		  <hr class = "divider">
			<?php		
			$file = fopen('text/guideline.txt', 'r') or die ("Failed to Open the File");
			$count = 0;
			while (!feof($file))
			{
				$line = fgets($file, 4086);
				if($count < 14)
				{
					echo "<p class = 'first' id = $count>$line</p>";
				}
				else if ($count == 14)
				{
					echo "<p class = 'third' id = $count>$line</p>";
				}
				else
				{
					echo "<p class = 'second' id = $count>$line</p>";
				}
				$count++;
			}
			fclose($file);
		?>
		<hr class = "divider">
		</div>

	
 </div>
</div>

<!--00000000000000000777777777777777777777777777777777770000000000000000000000000000007777777777770000000000000000000000007777777777000000000-->
<!-- -->																					  <!-----	Right Side     -->
<!--00000000000000003330000000000000000000033333333300000000003333333333333333333333333330000000000000000000000000000000000000000000000000000-->
	
	<div class = "home-right2">
	<!--
		<input type = "text" name = "search">
		<button type = "button" class = "button_connector">Search</button>
		<button type = "button" class = "button_connector">Settings</button>
		-->Please sign in to access menu
	</div>
	<div class = "main-right2">
		<h3>Influenced by:</h3>
			<ul>
				<li class = "left"><button type = "button" class = "button_elevate">Inspirator:  7,111 </button></li>
				<li class = "left"><button type = "button" class = "button_elevate">Inspirator:  71,111,317 </button></li>
				<li class = "left"><button type = "button" class = "button_elevate">Inspirator:  71 </button></li>
			</ul>
		<hr>
		<h3>Influences:</h3>
			<ul>
				<li class = "left"><button type = "button" class = "button_implement">Implementer:   777,111</button></li>
				<li class = "left"><button type = "button" class = "button_implement">Implementer:   711,111,317,232</button></li>
				<li class = "left"><button type = "button" class = "button_implement">Implementer:   7</button></li>
			</ul>
			<br/>
			<hr/>
			<br/>
		<img src = "img/yin.png" style = "height: 200px; width: 300px;">
	</div>
  </div>
 </body>
</html>