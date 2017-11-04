<?php
session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="Timetable";
	$conn=mysqli_connect($servername, $username, $password, $dbname);
	
	

	session_destroy(); 
	header('Location:main.html');
?>