<?php
session_start();
$rmail=$_SESSION['rmail'];
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT * FROM `profile` WHERE mail='$rmail'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		$row=$res->fetch_assoc();
		$rname=$row['name'];
		$dob=$row['dob'];
		$gender=$row['gender'];
		$skill=$row['skill'];
		$school=$row['school'];
		$city=$row['city'];
		$home=$row['home'];
		$place=$row['place'];
		$phone=$row['phone'];
		$website=$row['website'];
		$language=$row['language'];
		$about=$row['about'];
		$other=$row['other'];
		$quote=$row['quote'];
		$rphoto=$row['pro_pic'];
		$rcover=$row['cov_pic'];
	}
	else
	{
		$skill=null;
		$school=null;
		$city=null;
		$home=null;
		$place=null;
		$phone=null;
		$website=null;
		$language=null;
		$about=null;
		$other=null;
		$quote=null;
	}
?>
<html>
<head>
<title>
BSAsquare
</title>
<link rel="icon" href="./images/title.ico">
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="top">
<div class="logo">
<img src="./images/title.png" height="50px" width="60px" align="right">
</div>
<div class="search">
<form action="search.php" method="get">
<input type="text" name="search" placeholder="Search" id="search">
<input type="submit" name="search_submit" value="Search" id="search_button">
</form>
</div>
<div class="options">
<div id="nl">
<img src="./images/notification_logo.png" width="26" height="26">
</div>
<div id="ml">
<img src="./images/message_logo.png" width="32" height="26">
</div>
<div id="frl">
<img src="./images/friend_request_logo.png" width="44" height="26">
</div>
<div id="un">
<a href="profile.php"><p1><?php echo $_SESSION['fname']; ?></p1></a> &nbsp; | &nbsp; <a href="home.php"><p1>Home</p1></a>
</div>
<div id="pp">
<img src="./profile/<?php echo $_SESSION['photo'] ?>" width="30" height="30">
</div>
</div>
<div class="logout">
<button id="logout"><a href="logout.php"><a href="signup.php"><p1>Log Out</p1></a></a></button>
</div>
</div>
<div class="center">
<div class="left">

</div>
<div class="middle">
<div id="cover">
<img src="./cover/<?php echo $rcover ?>" width="820px" height="200px">
</div>
<div id="profile">
<img src="./profile/<?php echo $rphoto ?>" width="180" height="180">
</div>
<div id="fn">
<p2><?php echo $rname; ?></p2>
</div>
<div id="po">
<table id="po">
<tr>
<td id="active">
<a href="friends_profile_1.php">Timeline</a>
</td>
<td>
<a href="friends_profile_about.php"><p3>About</p3></a>
</td>
<td>
<a href="friends_profile_friends">Friends</a>
</td>
<td>
<a href="friends_profile_photos.php">Photos</a>
</td>
</tr>
</table>
</div>
<div id="about">
<div id="an">
Name:<br>
Date of Birth:<br>
Gender:<br>
Professional Skills:<br>
High School:<br>
Current city:<br>
Home town:<br>
Other places lived:<br>
Email:<br>
Mobile phone:<br>
Website:<br>
Language:<br>
About you:<br>
Other names:<br>
Favourite quotes:
</div>
<div id="ar">
<form action="change.php" method="post">
<?php echo $rname; ?>
<br>
<?php echo $dob; ?>
<br>
<?php echo $gender ?>
<br>
<?php echo $skill; ?>
<br>
<?php echo $school; ?>
<br>
<?php echo $city; ?>
<br>
<?php echo $home; ?>
<br>
<?php echo $place; ?>
<br>
<?php echo $rmail; ?>
<br>
<?php echo $phone; ?>
<br>
<?php echo $website; ?>
<br>
<?php echo $language; ?>
<br>
<?php echo $about; ?>
<br>
<?php echo $other; ?>
<br>
<?php echo $quote; ?>
</form>
</div>
</div>
</div>
<div class="right">

</div>
</div>
</body>
</html>