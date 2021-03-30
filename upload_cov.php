<?php
session_start();
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
<a href="profile.php"><p1><?php echo $_SESSION['fname']; ?></p1></a> &nbsp; | &nbsp; <A href="home.php"><p1>Home</p1></a>
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

</div>
<div class="middle">
<form action="upload_cov_script.php" method="post" enctype="multipart/form-data">
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">
</form>
</div>
<div class="right">

</div>
</div>
</body>
</html>