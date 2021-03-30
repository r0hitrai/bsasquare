<?php
if(isset($_POST['signup']))
{
	$hname="localhost";
	$uname="root";
	$Password="";
	$databasename="simmi";
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mail=$_POST['mail'];
	$pass=$_POST['new_pass'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$gender=$_POST['gender'];
	$connect=mysqli_connect($hname,$uname,$Password,$databasename);
	$query="SELECT `mail` FROM `signup` WHERE mail='$mail'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res) == 0)
	{
			$query="INSERT INTO `signup`(`fname`, `lname`, `mail`, `pass`, `day`, `month`, `year`, `gender`, `pro_pic`, `cov_pic`) VALUES ('$fname','$lname','$mail','$pass','$day','$month','$year','$gender','default.png','default.png')";
			$resl=mysqli_query($connect,$query);
			if($resl)
			{
				$query="INSERT INTO `search`(`fullname`, `mail`) VALUES ('$fname $lname', '$mail')";
				$res=mysqli_query($connect,$query);
				header("Location: signup_pass.html");
				exit();
			}
			else
			{
				header("Location: signup_fail.html");
				exit();
			}
	}
	else
	{
		header("Location: signup_error.html");
		exit();
	}
}
?>