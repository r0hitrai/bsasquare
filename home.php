<?php
session_start();
$mail=$_SESSION['mail'];
$pass=$_SESSION['pass'];
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT `pro_pic`, `cov_pic` FROM `signup` WHERE mail='$mail' AND pass='$pass'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		$row=$res->fetch_assoc();
	    $photo=$row['pro_pic'];
		$cover=$row['cov_pic'];
		$_SESSION['photo']=$photo;
		$_SESSION['cover']=$cover;
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
<link rel="stylesheet" type="text/css" href="style1.css">
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
<button id="logout"><a href="signup.php"><p1>Log Out</p1></a></button>
</div>
</div>
<div class="center">
<div class="left">
<div class="il">
<div id="lui">
<img src="./profile/<?php echo $_SESSION['photo'] ?>" width="30" height="30">
</div>
<div id="ln">
<a href="profile.php"><p2><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></p2></a>
</div>
<br><br><br>
<div id="nsf">
<img src="./images/news_feed.png" width="30" height="30">
</div>
<div id="nfn">
news feed
</div>
<br><br>
<div id="lnl">
<img src="./images/notification_logo_b.png" width="30" height="30">
</div>
<div id="lnn">
Notification
</div>
<br><br>
<div id="lml">
<img src="./images/message_logo_b.png" width="30" height="30">
</div>
<div id="lmn">
Messages
</div>
</div>
</div>
<div class="middle">
<div id="post">
<div id="cp">
Compose post
</div>
<form id="post1" action="feed.php" method="post">
<textarea rows="100" cols="100" form="post1" name="post2" placeholder="What's on your mind">
</textarea>
<br>
<input type="submit" name="post3" value="Post" id="post">
</form>
<form action="post.php" method="post" enctype="multipart/form-data">
<div id="cp">
Post photo:
</div>
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Post" name="submit" id="post">
</form>
</div>
<div id="feed">
<?php
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT * FROM `feed` WHERE id='$mail'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		while($row=$res->fetch_assoc())
		{
			$text=$row['text'];
			echo $text;
			echo "<br>";
			if($pic=$row['photo'])
			{
				echo '<img src="./post/'.$pic.'" width="60" height="60" alt="">'."&nbsp;&nbsp;";
				echo "<br>";
			}
		}
	}
	else
	{
		$text=null;
		$pic=null;
	}
?>
</div>
</div>
</div>
</body>
</html>