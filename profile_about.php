<?php
session_start();
$mail=$_SESSION['mail'];
$pass=$_SESSION['pass'];
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT * FROM `signup` WHERE mail='$mail' AND pass='$pass'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		$row=$res->fetch_assoc();
	    $photo=$row['pro_pic'];
		$cover=$row['cov_pic'];
		$_SESSION['photo']=$photo;
		$_SESSION['cover']=$cover;
		$dob=$row['day'].'/'.$row['month'].'/'.$row['year'];
		$gender=$row['gender'];
	}
	else
	{
		$photo=null;
	}
	$query="SELECT * FROM `profile` WHERE mail='$mail'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		$row=$res->fetch_assoc();
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
<img src="./profile/<?php echo $photo ?>" width="30" height="30">
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
<img src="./cover/<?php echo $cover ?>" width="820px" height="200px">
</div>
<div id="profile">
<img src="./profile/<?php echo $photo ?>" width="180" height="180">
</div>
<div id="fn">
<p2><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></p2>
</div>
<div id="up">
<button><a href="upload.php">Upload Profile Picture</a></button>
<button><a href="upload_cov.php">Upload Cover Photo</a></button>
</div>
<div id="po">
<table id="po">
<tr>
<td id="active">
<a href="profile.php">Timeline</a>
</td>
<td>
<a href="profile_about.php"><p3>About</p3></a>
</td>
<td>
<a href="profile_friends">Friends</a>
</td>
<td>
<a href="profile_photos.php">Photos</a>
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
<?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>
<br>
<?php echo $dob; ?>
<br>
<?php echo $gender ?>
<br>
<input type="text" name="skill" value="<?php echo $skill; ?>" id="ic">
<br>
<input type="text" name="school" value="<?php echo $school; ?>" id="ic">
<br>
<input type="text" name="city" value="<?php echo $city; ?>" id="ic">
<br>
<input type="text" name="home" value="<?php echo $home; ?>" id="ic">
<br>
<input type="text" name="place" value="<?php echo $place; ?>" id="ic">
<br>
<?php echo $_SESSION['mail'] ?>
<br>
<input type="text" name="phone" value="<?php echo $phone; ?>" id="ic">
<br>
<input type="text" name="website" value="<?php echo $website; ?>" id="ic">
<br>
<input type="text" name="language" value="<?php echo $language; ?>" id="ic">
<br>
<input type="text" name="about" value="<?php echo $about; ?>" id="ic">
<br>
<input type="text" name="other" value="<?php echo $other; ?>" id="ic">
<br>
<input type="text" name="quote" value="<?php echo $quote; ?>" id="ic">
<br>
<input type="submit" name="submit" value="Update changes" id="sc">
</form>
</div>
</div>
</div>
<div class="right">

</div>
</div>
</body>
</html>