<?php
session_start();
session_unset();
session_destroy();
?>
<html>
<head>
<title>
BSAsquare
</title>
<link rel="icon" href="./images/title.ico">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="top">
<div class="logo">
<img src="./images/logo.png" height="90px" width="300px" align="right">
</div>
<div class="login">
<form action="login.php" method="post">
User name
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Password
<br>
<input type="text" name="mail" required>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="pass" required>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="login" value="Log In" id="login">
</form>
</div>
</div>
<div class="center">
<div class="image">
<img src="./images/bsa.png" width="600" height="500" align="right">
</div>
<div class="signup">
<p1>Create an account</p1>
<br>
<form action="signup_script.php" method="post">
<input type="text" name="fname" placeholder="First name" id="fname" required>
&nbsp;&nbsp;
<input type="text" name="lname" placeholder="Last name" id="lname" required>
<br><br>
<input type="email" name="mail" placeholder="Email address" id="mail" required>
<br><br>
<input type="password" name="new_pass" placeholder="New password" id="new_pass" required>
&nbsp;&nbsp;
<input type="password" name="re_pass" placeholder="Confirm password" id="re_pass" required>
<br><br>
<p2>Birthday</p2>
<br>
<input type="text" name="day" placeholder="Day" id="day" required>
&nbsp;&nbsp;
<input type="text" name="month" placeholder="Month" id="month" required>
&nbsp;&nbsp;
<input type="text" name="year" placeholder="Year" id="year" required>
<br><br>
<input type="radio" name="gender" value="female" required><p2>Female</p2>
<input type="radio" name="gender" value="male" required><p2>Male</p2>
<br><br>
<input type="submit" name="signup" value="Create an account" id="signup">
</form>
<script src="validatePassword.js">
</script>
</div>
</div>
<div class="bottom">
<p3>Created by Ann B. Cherian and Rohit Rai.</p3>
</div>
</body>
</html>