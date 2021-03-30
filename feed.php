<?php
session_start();
$mail=$_SESSION['mail'];
$pass=$_SESSION['pass'];
if(isset($_POST['post3']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$feed=$_POST['post2'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="INSERT INTO `feed`(`id`, `text`) VALUES ('$mail','$feed')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		header("Location: home.php");
		exit();
	}
	else
	{
		echo("error");
		exit();
	}
}
?>