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

echo "<html>
<head>
	<title></title>

	<style type='text/css'>
			.headerx
 		{
				position:fixed;
				width:100%;
				height:100px;
				top:0;
				left:0;		
				background-color: #283593 ;	
				-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
		}
	
		.but
      {
      	top: 70%;
         background-color:#44c767;
             -moz-border-radius:20px;
         -webkit-border-radius:20px;
         border-radius:15px;
         border:1px solid #18ab29;
          display:inline-block;
         cursor:pointer;
            color:#ffffff;
         font-family:Arial;
                  font-size:17px;
            padding:10px 20px;
            text-decoration:none;
         text-shadow:0px 1px 0px #2f6627;
      }	
      	.input1
      {
      	 
   		 border-radius:10px;
  		  height:40px;
  		  width:190px;	
  		   background-color: #c5cae9;
      }
      table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #f7f7f7;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
  background-color:#3f51b5;
}
      .but1
      {
      	top: 50%;
      	left: 25%;
      }
      .color
      {
      	color: white;
      }
      .bgimg
      {
      	background-image: url('1.jpg');

      }

	</style>

</head>

<body bgcolor='#e0e0e0' class='bgimg'>
<div class='headerx'>
<h1><b class='color'>Update Time Table</b></h1>	
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</br></br></br></br></br></br></br>
<table  border='1'  class='blueTable' >
<tr>
	<th>Staff Id</th>
	<th>Monday</th>
	<th>Tuesday</th>
	<th>Wednesday</th>
	<th>Thursday</th>
	<th>Friday</th>
	<th>Saturday</th>
</tr>
<form method='post' action='updatedata.php'>
<tr >
	<td rowspan='7' ><input type='text' placeholder='Enter Staff Id' name='staff' class='input1'></td>
	<td><input type='text' placeholder='Class' value='<?php echo $mon1; ?>' name='mon1' class='input1'></td>
	<td><input type='text' placeholder='Class' name='tue1' class='input1'></td>
	<td><input type='text' placeholder='Class' name='wed1' class='input1'></td>
	<td><input type='text' placeholder='Class' name='thu1' class='input1'></td>
	<td><input type='text' placeholder='Class' name='fri1' class='input1'></td>
	<td><input type='text' placeholder='Class' name='sat1' class='input1'></td>
</tr>
<tr > 
	<td ><input type='text' placeholder='Class' name='mon2' class='input1'></td>
	<td><input type='text' placeholder='Class' name='tue2' class='input1'></td>
	<td><input type='text' placeholder='Class' name='wed2' class='input1'></td>
	<td><input type='text' placeholder='Class' name='thu2' class='input1'></td>
	<td><input type='text' placeholder='Class' name='fri2' class='input1'></td>
	<td><input type='text' placeholder='Class' name='sat2' class='input1'></td>
</tr>
<tr > 
	<td ><input type='text' placeholder='Class' name='mon3' class='input1'></td>
	<td><input type='text' placeholder='Class' name='tue3' class='input1'></td>
	<td><input type='text' placeholder='Class' name='wed3' class='input1'></td>
	<td><input type='text' placeholder='Class' name='thu3' class='input1'></td>
	<td><input type='text' placeholder='Class' name='fri3' class='input1'></td>
	<td><input type='text' placeholder='Class' name='sat3' class='input1'></td>
</tr>
<tr > 
	<td ><input type='text' placeholder='Class' name='mon4' class='input1'></td>
	<td><input type='text' placeholder='Class' name='tue4' class='input1'></td>
	<td><input type='text' placeholder='Class' name='wed4' class='input1'></td>
	<td><input type='text' placeholder='Class' name='thu4' class='input1'></td>
	<td><input type='text' placeholder='Class' name='fri4' class='input1'></td>
	<td><input type='text' placeholder='Class' name='sat4' class='input1'></td>
</tr>
<tr > 
	<td ><input type='text' placeholder='Class' name='mon5' class='input1'></td>
	<td><input type='text' placeholder='Class' name='tue5' class='input1'></td>
	<td><input type='text' placeholder='Class' name='wed5' class='input1'></td>
	<td><input type='text' placeholder='Class' name='thu5' class='input1'></td>
	<td><input type='text' placeholder='Class' name='fri5' class='input1'></td>
	<td><input type='text' placeholder='Class' name='sat5' class='input1'></td>
</tr>
<tr > 
	<td ><input type='text' placeholder='Class' name='mon6' class='input1'></td>
	<td><input type='text' placeholder='Class' name='tue6' class='input1'></td>
	<td><input type='text' placeholder='Class' name='wed6' class='input1'></td>
	<td><input type='text' placeholder='Class' name='thu6' class='input1'></td>
	<td><input type='text' placeholder='Class' name='fri6' class='input1'></td>
	<td><input type='text' placeholder='Class' name='sat6' class='input1'></td>
</tr>
<tr > 
	<td ><input type='text' placeholder='Class' name='mon7' class='input1'></td>
	<td><input type='text' placeholder='Class' name='tue7' class='input1'></td>
	<td><input type='text' placeholder='Class' name='wed7' class='input1' ></td>
	<td><input type='text' placeholder='Class' name='thu7'class='input1'></td>
	<td><input type='text' placeholder='Class' name='fri7' class='input1'></td>
	<td><input type='text' placeholder='Class' name='sat7' class='input1'></td>
</tr>
<div class='but1'>
<input type='submit' value='Update'  class='but'>
</div>
</form>

</table>

</br></br>


</body>
</html>"

?>