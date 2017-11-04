<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="Timetable";
	$conn=mysqli_connect($servername, $username, $password, $dbname);
	
	$tablename =$_POST['staff'];
	$mon1=$_POST['mon1'];
	$mon2=$_POST['mon2'];
	$mon3=$_POST['mon3'];
	$mon4=$_POST['mon4'];
	$mon5=$_POST['mon5'];
	$mon6=$_POST['mon6'];
	$mon7=$_POST['mon7'];
	$tue1=$_POST['tue1'];
	$tue2=$_POST['tue2'];
	$tue3=$_POST['tue3'];
	$tue4=$_POST['tue4'];
	$tue5=$_POST['tue5'];
	$tue6=$_POST['tue6'];
	$tue7=$_POST['tue7'];
	$wed1=$_POST['wed1'];
	$wed2=$_POST['wed2'];
	$wed3=$_POST['wed3'];
	$wed4=$_POST['wed4'];
	$wed5=$_POST['wed5'];
	$wed6=$_POST['wed6'];
	$wed7=$_POST['wed7'];
	$thu1=$_POST['tue1'];
	$thu2=$_POST['thu2'];
	$thu3=$_POST['thu3'];
	$thu4=$_POST['thu4'];
	$thu5=$_POST['thu5'];
	$thu6=$_POST['thu6'];
	$thu7=$_POST['thu7'];
	$fri1=$_POST['fri1'];
	$fri2=$_POST['fri2'];
	$fri3=$_POST['fri3'];
	$fri4=$_POST['fri4'];
	$fri5=$_POST['fri5'];
	$fri6=$_POST['fri6'];
	$fri7=$_POST['fri7'];
	$sat1=$_POST['sat1'];
	$sat2=$_POST['sat2'];
	$sat3=$_POST['sat3'];
	$sat4=$_POST['sat4'];
	$sat5=$_POST['sat5'];
	$sat6=$_POST['sat6'];
	$sat7=$_POST['sat7'];


	
	if(!$conn)
	{
		echo "Error in connecting database.";
	}
	else
	{
		 $sql = "TRUNCATE TABLE  VAR".$tablename;


	$sql1= "INSERT INTO VAR".$tablename." (monday,tuesday,wednesday,thursday,friday,saturday) VALUES ('$mon1', '$tue1', '$wed1', '$thu1', '$fri1', '$sat1')";


	$sql2= "INSERT INTO VAR".$tablename." (monday,tuesday,wednesday,thursday,friday,saturday) VALUES ('$mon2', '$tue2', '$wed2', '$thu2', '$fri2', '$sat2')";

	$sql3= "INSERT INTO VAR".$tablename." (monday,tuesday,wednesday,thursday,friday,saturday) VALUES ('$mon3', '$tue3', '$wed3', '$thu3', '$fri3', '$sat3')";

	$sql4= "INSERT INTO VAR".$tablename." (monday,tuesday,wednesday,thursday,friday,saturday) VALUES ('$mon4', '$tue4', '$wed4', '$thu4', '$fri4', '$sat4')";

	$sql5= "INSERT INTO VAR".$tablename." (monday,tuesday,wednesday,thursday,friday,saturday) VALUES ('$mon5', '$tue5', '$wed5', '$thu5', '$fri5', '$sat5')";

	$sql6= "INSERT INTO VAR".$tablename." (monday,tuesday,wednesday,thursday,friday,saturday) VALUES ('$mon6', '$tue6', '$wed6', '$thu6', '$fri6', '$sat6')";

		mysqli_query($conn, $sql);
	
		
		mysqli_query($conn, $sql1);
		

		
		mysqli_query($conn, $sql2); 
		
		
		mysqli_query($conn, $sql3);  
		
		mysqli_query($conn, $sql4); 
		
		
		mysqli_query($conn, $sql5);  
		
		
		mysqli_query($conn, $sql6); 


		echo "Updation sucess";
		header('Location:mainmenu.html');
		
	}
?>