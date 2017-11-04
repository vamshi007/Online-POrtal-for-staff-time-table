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
	$tablename=$_POST['staffid'];
	$sql = "SELECT * FROM VAR".$tablename;

	$result = mysqli_query($conn, $sql);

		

	echo "
	<html>
	<head>


				<style type='text/css'>
			
		
      	
      table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #f7f7f7;
  width: 100%;
  height: 40%;
  text-align: left;
  border-collapse: collapse;
}
      







	</style>







	</head>
	<body>
	


	<table border='1' class='blueTable'>
	<tr>
	<th>Monday</th>
	<th>Tuesday</th>
	<th>Wednesday</th>
	<th>Thusday</th>
	<th>friday</th>
	<th>saturday</th>
	</tr>";
	$row = mysqli_fetch_array($result);
	{
		echo "<form action='insertdata.php' method='post'>
            
            <input type='text' name= 'mon1' value= '<?php echo $row['monday']; ?>' >
			<input type='text' name= 'tue1' value= '<?php echo $row['tuesday']; ?>'>
			<input type='text' name= 'wed1' value= '<?php echo $row['wednesday']; ?> '>
			<input type='text' name= 'thu1' value= '<?php echo $row['thursday']; ?>' >
			<input type='text' name= 'fri1' value= '<?php echo $row['friday']; ?>' >
			<input type='text' name= 'sat1' value= '<?php echo $row['saturday']; ?>' >
        </form>"
	}
	echo "</table>";
	echo	"</body>";
	echo "<html>";


?>