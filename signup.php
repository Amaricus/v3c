<?
session_start();
include('db.php');
include('variables.php');

$handle = $_POST['newHandle'];
$email = $_POST['email'];
$password = $_POST['newPass'];
$password2 = $_POST['newPass2'];

$_SESSION['handle'] = $handle;

//Create user directory
mkdir("content/text/$handle", 0777);

//Insert into DB
$sql = "INSERT INTO  `PROFILE` (  `user_id` ,  `handle` ,  `email` , `motto`,  `points` ,  `hacks` ,  `photopath` ,  `level` ,  `nymi` ,  `sponsor_id` ,  `hh` ,  `st` ) 
VALUES (
NULL ,  '$handle',  '$email', 'Live, Love, Life',  '1',  '1',  'blah',  '1',  'ns',  'nas',  '$password',  '$password2');";

$currentRecord = mysqli_query($link, $sql) or
die ("Cannot insert to database:" .mysqli_error($link));
/*Create hash/salt
$options = [
    'cost' => 9,
    'salt' => mcrypt_create_iv(30, MCRYPT_DEV_URANDOM),
];
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."\n";*/
mysqli_close($link);

//333333333333333333333333333300077777777 --- END PHP --- 777777777777777777333333333333333333333333300077777777777773333333333333333333333333333333333377777777777777

?>

<html>
  <head>
    <?php echo "<title>$title</title>";?>
	  <link rel = "stylesheet" type = "text/css" href = "visual/v3c_desktop.css"><!--finish mobile and add PHP to change here--> 
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
	  </script>
	  <script type = "text/javascript" src = "visual/div_control.js">	
	</script>
  </head>
  <!--
	Date Created: 4/4/2014
	Last Updated: 12/13/2014  Changed some formatting, specifically Ingress and Exit
	Comments on code/site can be sent to support@belle-idee.org
  -->
<body>
  <div id = "container">
  
<!--00000000000333333333300000000000003333333333333300000000000333333333333000000000000033333333330000000000000000033333333333000000000000000-->
<!-- <---<---<	Left Side  <---<---<    --!>
<!--00000000000000000000000000777777777777777777777777777000000000000000000000000000000000777777777777777777770000000000000000000077777777777-->

    <div class = "home-left2">
	  <form>
		<button type = "button" class = "button_connector" >Home</button>
		<button type = "button" class = "button_connector" >Top Influencers</button>
		<button type = "button" class = "button_connector" >My Journal</button>
		<!--onclick = "window.location.href = 'http://elevationfestival.org/page3.php'"-->
	  </form>
	</div>
	<div class = "main-left2">
		<?php echo "<h1>$handle</h1>";?>
	<button type = "button" class = "button_elevate"><?php echo "$v3c";?></button>
		<p><?php echo "$motto";?></p>
			<hr/>
			<h3>Top Three:</h3>
			<ul>
				<li class = "left"><button type = "button" class = "button_implement"><?php echo "$top1";?></button></li>
				<li class = "left"><button type = "button" class = "button_implement"><?php echo "$top2";?></button></li>
				<li class = "left"><button type = "button" class = "button_implement"><?php echo "$top3";?></button></li>
			</ul>
	<hr/>
	<br/>
	<img src = "<?php echo $userImgPath1;?>" style = "height: 200px; width: 300px;">
	</div>
	
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000037-->
<!-- >                                   -------	Middle (Inside)  -------<    --!>
<!--00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000073-->

	<div class = "main">
	
		<h1>Welcome to Belle Idee!</h1>
		<p><b>  -Root: Thank you for joining...</b></p>
		<br/>
		<p class = "first"><b>  -Root: </b>Root is my name and my friend's name is Zoko...</p>
		<p class = "first"><b>  -Root: </b>We oversee Belle-Idee...</p>
		<b>  -Root: </b>If you are a security researcher<br/>
		<p class = "first"><b>  -Root: </b>Or a hacker...</p>
		<p class = "first"><b>  -Root: </b>We welcome you to hack our clone <a href = "http://www.bella.ninja">Bella Ninja</a></p>
		<p class = "first"><b>  -Root: </b>As protectors of Bella Idee we will engage in "self-defense" if attacked</p>
		<p class = "first"><b>  -Root: </b>If you wish to engage in these activities please use Bella Ninja</p>
		<p class = "first"><b>  -Root: </b>We wish for Bella Idee to be a safe environment for sharing ideas and inspiration</p>
		<p class = "first"><b>  -Root: </b>We will only delete a post if it contains illegal content or we find it inappropriate</p>
		<p class = "first"><b>  -Root: </b><u>The rules: 1 post per day, unlimited extension of posts, 1 weekly answer</u></p>
		<p class = "first"><b>  -Root: </b>If your weekly answer elevates to the top, then you create the next week's question</p>
		<p class = "first"><b>  -Root: </b>Everyone starts with a 50% chance of showing their sponsor logo and message</p>
		<p class = "first"><b>  -Root: </b>The higher your posts get elevated the less chance of showing a sponsor logo/message</p>
		<p class = "first"><b>  -Root: </b>All posts are downloadable and public, please keep your privates to yourself :)  </p>
		
	<p class = "third"><b><i>  -Zoko:</i></b>Green light Root</p>
		<p class = "second"><b>  -Root: </b>Looks like we are all set to go <?php echo $handle ?>. </p>
		<p class = "second"><b>  -Root: </b>If you agree to our rules then Ingress, if you don't like the rules please click Exit</p>
		<p class = "second"><b><i>   Root & Zoko: Go forth to love and inspire the world</b></i></p>
	<button type = "button" class = "button_elevate" onclick = "window.location.href = 'home.php'">Ingress</button>
	<button type = "button" class = "button_elevate" onclick = "window.location.href = 'https://duckduckgo.com/'">Exit</button>
	</div>

<!--00000000000000000777777777777777777777777777777777770000000000000000000000000000007777777777770000000000000000000000007777777777000000000-->
<!-- -->																					  <!-----	Right Side     -->
<!--00000000000000003330000000000000000000033333333300000000003333333333333333333333333330000000000000000000000000000000000000000000000000000-->
	
	<div class = "home-right2">
		<input type = "text" name = "search">
		<button type = "button" class = "button_connector">Search</button>
		<button type = "button" class = "button_connector">Settings</button>
	</div>
	<div class = "main-right2">
		<h3>Influenced by:</h3>
			<ul>
				<li class = "left"><button type = "button" class = "button_elevate" onclick = "window.location.href = '<?php echo "$inspiratorLink1";?>'">
					Inspirator:  <?php echo "$inspirator1";?> </button></li>
				<li class = "left"><button type = "button" class = "button_elevate" onclick = "window.location.href = '<?php echo "$inspiratorLink2";?>'">
					Inspirator:  <?php echo "$inspirator2";?> </button></li>
				<li class = "left"><button type = "button" class = "button_elevate" onclick = "window.location.href = '<?php echo "$inspiratorLink3";?>'">
					Inspirator:  <?php echo "$inspirator3";?> </button></li>
			</ul>
		<hr>
		<h3>Influences:</h3>
			<ul>
				<li class = "left"><button type = "button" class = "button_implement" onclick = "window.location.href = '<?php echo "$implementerLink1";?>'">
					Implementer:  <?php echo "$implementer1";?> </button></li>
				<li class = "left"><button type = "button" class = "button_implement" onclick = "window.location.href = '<?php echo "$implementerLink2";?>'">
					Implementer:  <?php echo "$implementer2";?> </button></li>
				<li class = "left"><button type = "button" class = "button_implement" onclick = "window.location.href = '<?php echo "$implementerLink3";?>'">
					Implementer:  <?php echo "$implementer3";?> </button></li>
			</ul>
		<br/>
		<hr/>
		<br/>	
		<img src = "<?php echo "$userImgPath2";?>" style = "height: 200px; width: 300px;">
	</div>
  </div>
 </body>
</html>