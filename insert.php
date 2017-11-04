<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Timetable";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}
	$staffname=$_POST['staffname'];
	$staffnumber=$_POST['staffnumber'];
	
	$sql = "INSERT INTO staffid VALUES ('$staffname','$staffnumber')";

	$result = mysqli_query($conn, $sql);
	echo "Inserted sucessfully";
		header('Location:insert.html');
?>