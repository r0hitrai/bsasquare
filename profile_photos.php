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
<a href="profile_about.php">About</a>
</td>
<td>
<a href="profile_friends">Friends</a>
</td>
<td>
<a href="profile_photos.php"><p3>Photos</p3></a>
</td>
</tr>
</table>
</div>
<div id="photos">
<?php
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT * FROM `feed` WHERE id='$mail'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		while($row=$res->fetch_assoc())
		{
			if($pic=$row['photo'])
			{
				echo '<img src="./post/'.$pic.'" width="60" height="60" alt="">'."&nbsp;&nbsp;";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}
			else
			{
				$pic=null;
			}
		}
	}
	else
	{
		$pic=null;
	}
?>
</div>
</div>
<div class="right">

</div>
</div>
</body>
</html>