<?php
session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="Timetable";
	$conn=mysqli_connect($servername, $username, $password, $dbname);
	$user=$_POST['username'];
	$pass=$_POST['passcode'];
	$sql="select * from login where username='$user' and passcode='$pass'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if ($count==1) 
	{
		
		echo "login success";
		$_SESSION["username"] = $user;
		$_SESSION["passcode"] = $pass;
		header('Location: mainmenu.html');
	}
	else
	{
		echo "username  or password is wrong ";
	}
?>		