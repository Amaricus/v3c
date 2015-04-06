<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to Belle Idee</title>
	  <link rel = "stylesheet" type = "text/css" href = "visual/v3c_desktop.css">
	  <style>
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type = "text/javascript" src = "visual/div_control.js"></script>
  </head>
  <!--
	Date Created: 4/4/2014
	Last Updated: 3/27/2015 (Integrated with password module) + changed layout to have centered login + other options (+bug testing)
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
				<h3 style = "color: white;">Login Options:</h3>
				<button type = "button" class = "button_connector" onclick = "window.location.href = 'nymiLogin.php'">Nymi</button>
				<button type = "button" class = "button_connector" onclick = "window.location.href = 'passwordLogin.php'">Password</button>
				<hr>
				<h3 style = "color: white;">New members:</h3>
				<button type = "button" class = "button_elevate" onclick = "window.location.href = 'tour.php'">Take our Tour!</button>
				<button type = "button" class = "button_elevate" onclick = "window.location.href = 'home.php'">Hack our Clone!</button>
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