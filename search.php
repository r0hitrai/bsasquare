<?php
session_start();
$_SESSION["search"]=$_GET['search'];
if(isset($_GET['search_submit']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$search=$_GET['search'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT * FROM `search` WHERE fullname='$search'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) > 0)
	{
		header("Location: search_result.php");
		exit();
	}
	else
	{
		echo $search;
		//header("Location: search_failed.php");
		//exit();
	}
}
?>