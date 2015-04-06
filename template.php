<?php include ('db.php');
	  include ('variables.php');
	  ?>
<!DOCTYPE html>
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
	Last Updated: 9/13/2014  *Added customize profile or continue to post
	Comments on code/site can be sent to support@belle-idee.org
  -->
<body>
  <div id = "container">
  
<!--00000000000333333333300000000000003333333333333300000000000333333333333000000000000033333333330000000000000000033333333333000000000000000-->
<!-- <---<---<	Left Side  <---<---<    --!>
<!--00000000000000000000000000777777777777777777777777777000000000000000000000000000000000777777777777777777770000000000000000000077777777777-->

    <div class = "home-left">
	  <form>
		<button type = "button" class = "button_connector" onclick = "window.location.href = 'home.php'" >Home</button>
		<button type = "button" class = "button_connector" >Top Influencers</button>
		<button type = "button" class = "button_connector" >My Journal</button>
		<!--onclick = "window.location.href = 'http://elevationfestival.org/page3.php'"-->
	  </form>
	</div>
	

	<div class = "main-left">
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
		<?php echo "<h1>$title</h1>";?>
		<button type = "button" class = "button_elevate">Elevate: <?php echo "$elevation";?></button>
		<button type = "button" class = "button_implement">Extend: <?php echo "$extension";?></button>
		<p><b><span style = "color: #7FFF00;">#</span>
				<span style = "color: blue;"><a href = "<?php echo "$tagLink1";?>"></a><?php echo "$tag1";?></span> 
  				   <span style = "color: #7FFF00;">#</span>
				     <span style = "color: blue;"><a href = "<?php echo "$tagLink2";?>"></a><?php echo "$tag2";?></span> 
					   <span style = "color: #7FFF00;">#</span>
					     <span style = "color: blue;"><?php echo "$tagLink3";?></a><?php echo "$tag3";?></span></b></p>
		<hr>
			<?php				
			$file = fopen('content/text/testimony_of_a_toker.txt', 'r') or die ("Failed to Open the File");
			$count = 0;
			while (!feof($file))
			{
				$line = fgets($file, 7086);
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
		<a href = "content/text/testimony_of_a_toker.txt">Download a Copy</a>
	</div>

<!--00000000000000000777777777777777777777777777777777770000000000000000000000000000007777777777770000000000000000000000007777777777000000000-->
<!-- -->																					  <!-----	Right Side     -->
<!--00000000000000003330000000000000000000033333333300000000003333333333333333333333333330000000000000000000000000000000000000000000000000000-->
	
	<div class = "home-right">
		<input type = "text" name = "search">
		<button type = "button" class = "button_connector">Search</button>
		<button type = "button" class = "button_connector">Settings</button>
	</div>
	<div class = "main-right">
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