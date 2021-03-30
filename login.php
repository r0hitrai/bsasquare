<?php
session_start();
$_SESSION['mail']=$_POST['mail'];
$_SESSION['pass']=$_POST['pass'];
if(isset($_POST['login']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT `fname`, `lname`, `mail`, `pass` FROM `signup` WHERE mail='$mail'  AND pass='$pass'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		$row=$res->fetch_assoc();
	    $fname=$row['fname'];
		$lname=$row['lname'];
		$_SESSION['fname']=$fname;
		$_SESSION['lname']=$lname;
		header("Location: home.php");
		exit();
	}
	else
	{
		header("Location: login_fail.html");
		exit();
	}
}
?>