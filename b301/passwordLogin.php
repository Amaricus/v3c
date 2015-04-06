<?php
 	include_once 'includes\v3c_connect.php';
	include_once 'includes\v3c-functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to Belle Idee</title>
	  <link rel = "stylesheet" type = "text/css" href = "visual/v3c_desktop.css">
	  <style>
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type = "text/javascript" src = "visual/div_control.js"></script>
	        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
  </head>
  <!--
	Date Created: 4/4/2014
	Last Updated: 3/19/2015 (Integrated with password module) + changed layout to have centered login + other options (+bug testing)
	Comments on code/site can be sent to support@belle-idee.org
  -->
 <body>
  <div id = "container">
  
<!--00000000000333333333300000000000003333333333333300000000000333333333333000000000000033333333330000000000000000033333333333000000000000000-->
<!-- <---<---<	Left Side  <---<---<    --!>
<!--00000000000000000000000000777777777777777777777777777000000000000000000000000000000000777777777777777777770000000000000000000077777777777-->

    <div class = "home-left2">
	<!--
	  Welcome page
		<button type = "button" class = "button_connector" onclick = "window.location.href = 'http://elevationfestival.org/page1.php'">Home</button>
		<button type = "button" class = "button_connector" onclick = "window.location.href = 'http://elevationfestival.org/page2.php'">Top Influencers</button>
		<button type = "button" class = "button_connector" onclick = "window.location.href = 'http://elevationfestival.org/page3.php'">My Journal</button>
	  -->Please sign in to access menu
	</div>
	<div class = "main-left2">
		<h1>Root</h1>
		<?php/*
if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
    echo "CRYPT_BLOWFISH is enabled!";
}else {
echo "CRYPT_BLOWFISH is not available";
}*/
?>
		<button type = "button" class = "button_elevate">3,111,111,373,232</button>
			<ul>
				<li class = "left">echo motto</li>
				<li class = "left">echo motto</li>				
			</ul>
			<hr/>
			<h3>Top Three:</h3>
			<ul>
				<li class = "left"><button type = "button" class = "button_implement">3,111,111,373,232</button></li>
				<li class = "left"><button type = "button" class = "button_implement">31,111,317</button></li>
				<li class = "left"><button type = "button" class = "button_implement">31,323</button></li>
			</ul>
			<br/>
			<hr/>
			<br/>
		<img src = "img/yin.png" style = "height: 200px; width: 300px;">
	</div>
	
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000037-->
<!-- >                                   -------	Middle (Inside)  -------<    --!>
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000073-->

	<div class = "welcomeMain">
		<h1>Welcome to Belle Idee</h1>
		<h4><u>The home for anonymously sharing ideas, inspiration, and influence</u></h4>
		<br/>
			<div class = "login">
		<?php
		if (isset($_GET['error']))
		{
			echo '<p class = "eight">Error Logging In!</p>';
		}
		?>
		<form action = "includes/process_login.php" method = "POST" name = "login_form">
		<table align = "center" style = "border: 1px solid black;">
		<tr><td><label for = "handle" style = "color: white;">Handle:</label></td><td><input type = "text" name = "handle"></td></tr>
		<tr><td><label for = "pass" style = "color: white;">Password:</label></td><td><input type = "password" name = "pass"></td></tr>
		<tr><td colspan = "2"><input type = "submit" class = "button_implement" value = "Ingress" onclick = "formhash(this.form, this.form.pass);"/></td></tr>
		</table>
		</form>
			</div>
		<br/>
		<br/>
		<!--Question of the Week:-->
		<h2>This week's question:</h2>
		<p><u>How are we influenced by our emotions, what purpose do they play?</u></p>
		<!--Question of the Week:-->
		<br/>
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
				<li class = "left"><button type = "button" class = "button_elevate">Inspirator:  3,111 </button></li>
				<li class = "left"><button type = "button" class = "button_elevate">Inspirator:  31,111,317 </button></li>
				<li class = "left"><button type = "button" class = "button_elevate">Inspirator:  31 </button></li>
			</ul>
		<hr>
		<h3>Influences:</h3>
			<ul>
				<li class = "left"><button type = "button" class = "button_implement">Implementer:   333,111</button></li>
				<li class = "left"><button type = "button" class = "button_implement">Implementer:   311,111,317,232</button></li>
				<li class = "left"><button type = "button" class = "button_implement">Implementer:   3</button></li>
			</ul>
			<br/>
			<hr/>
			<br/>
		<img src = "img/yang.png" style = "height: 200px; width: 300px;">
	</div>
  </div>
 </body>
</html>