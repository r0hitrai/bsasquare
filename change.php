<?php
session_start();
$mail=$_SESSION['mail'];
if(isset($_POST['submit']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$skill=$_POST['skill'];
	$school=$_POST['school'];
	$city=$_POST['city'];
	$home=$_POST['home'];
	$place=$_POST['place'];
	$phone=$_POST['phone'];
	$website=$_POST['website'];
	$language=$_POST['language'];
	$about=$_POST['about'];
	$other=$_POST['other'];
	$quote=$_POST['quote'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="UPDATE `profile` SET `skill`='$skill',`school`='$school',`city`='$city',`home`='$home',`place`='$place',`phone`='$phone',`website`='$website',`language`='$language',`about`='$about',`other`='$other',`quote`='$quote' WHERE mail='$mail'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) == 0)
	{
		header("Location: profile_about.php");
		exit();
	}
	else
	{
		//header("Location: signup_error.html");
		//exit();
		echo "error";
	}
}
?>