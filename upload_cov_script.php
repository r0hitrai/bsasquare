<?php
session_start();
$mail=$_SESSION['mail'];
$pass=$_SESSION['pass'];

$target_dir="cover/";
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
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
		$query="UPDATE `signup` SET `cov_pic`='$photo' WHERE `mail`='$mail'";
		$res=mysqli_query($connect,$query);
		if($res)
		{
			header("Location: profile.php");
			exit();
		}
		else
		{
			header("Location: upload_cov_fail.php");
			exit();
		}
	}
	else
	{
		echo "File is not an image.";
		$uploadOk=0;
	}
}
?>