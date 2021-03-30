<?php
session_start();
$mail=$_SESSION['mail'];
$pass=$_SESSION['pass'];

$target_dir="post/";
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"]))
{
	$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check!=false)
	{
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		$hname="localhost";
		$uname="root";
		$Password="";
		$databasename="simmi";
		$photo=basename($_FILES["fileToUpload"]["name"]);
		$connect=mysqli_connect($hname,$uname,$Password,$databasename);
		$query="INSERT INTO `feed`(`id`, `photo`) VALUES ('$mail','$photo')";
		$res=mysqli_query($connect,$query);
		if($res)
		{
			header("Location: home.php");
			exit();
		}
		else
		{
			echo "error";
			//header("Location: upload_fail.php");
			//exit();
		}
	}
	else
	{
		echo "File is not an image.";
	}
}
?>