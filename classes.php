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
	if($tablename==null)
	{
		echo "Enter Staff Id";
	}
	else
	{
	$sql = "SELECT * FROM VAR".$tablename;

	$result = mysqli_query($conn, $sql);

	echo"	<script>

			function main() {
               window.location='mainmenu.html';
            }

		</script>";

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
  background-color:#7986cb;
}
.but
      {
         background-color:#44c767;
             -moz-border-radius:28px;
         -webkit-border-radius:28px;
         border-radius:28px;
         border:1px solid #18ab29;
          display:inline-block;
         cursor:pointer;
            color:#ffffff;
         font-family:Arial;
                  font-size:17px;
            padding:16px 31px;
            text-decoration:none;
         text-shadow:0px 1px 0px #2f6627;
      }
      .bgimg
      {
      	background-image: url('1.jpg');

      }







	</style>







	</head>
	<body bgcolor='#e0e0e0' class='bgimg'>
	


	<table border='1' class='blueTable'  >
	<tr>
	<th>Monday</th>
	<th>Tuesday</th>
	<th>Wednesday</th>
	<th>Thusday</th>
	<th>friday</th>
	<th>saturday</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['monday'] . "</td>";
		echo "<td>" . $row['tuesday'] . "</td>";
		echo "<td>" . $row['wednesday'] . "</td>";
		echo "<td>" . $row['thursday'] . "</td>";
		echo "<td>" . $row['friday'] . "</td>";
		echo "<td>" . $row['saturday'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<input type='button' value='Mainmenu' onclick='main()' class='but'>";
	echo"</body>";
	echo "<html>";

}

?>