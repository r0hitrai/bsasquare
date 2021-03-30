<?php
session_start();
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
<div id="sr">
<?php
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$search=$_SESSION["search"];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT * FROM `search` WHERE fullname='$search'";
	$res=mysqli_query($connect,$query);
	while($row=$res->fetch_assoc())
	{
		$rmail=$row['mail'];
		$query="SELECT * FROM `signup` WHERE mail='$rmail'";
		$resl=mysqli_query($connect,$query);
		$rowl=$resl->fetch_assoc();
		$rfname=$rowl['fname'];
		$rlname=$rowl['lname'];
		$pic=$rowl['pro_pic'];
		echo "<br>";
		echo '<img src="./profile/'.$pic.'" width="60" height="60">'."&nbsp;&nbsp;";
		echo $rfname . " " . $rlname;
		echo "<br>";
		echo '<a href="friends_profile.php?rmail='.$rmail.'">View Profile</a>';
		echo "<br><br>";
	}
?>
</div>
</div>
</div>
</body>
</html>