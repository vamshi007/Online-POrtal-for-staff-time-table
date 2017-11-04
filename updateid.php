<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Timetable";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$staff=$_POST['staffid'];

$sql = "SELECT * FROM VAR".$staff;
$result = mysqli_query($conn, $sql);



echo " <html>
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
        background-color:  #283593; 
        -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
    }
    .log
    {
      position:absolute;
      left:30%;
      top:40%;
        
    }
    .but
      {
          
         background-color:#4caf50;
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
        width:185px;  
        background-color: #c5cae9;
      }
      .color
      {
        color:  white;
      }
      .bgimg
      {
        background-image: url('1.jpg');

      }


  
</style>


</head>

<body bgcolor='#e0e0e0' class='bgimg'
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
  <td rowspan='7' >";
 ?>
  <input type='text' placeholder='Enter Staff Id' name='staff' value="<?php echo $staff;?>" class='input1' requried></td> ";
<?php












$i=1;
  while($row = mysqli_fetch_array($result)) 
    {
      
      if ($i==1) 
      {
          ?>
            </tr>      
        <td><input type='text' placeholder='Class' name='mon1' value="<?php echo $row['monday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='tue1' value="<?php echo $row['tuesday'];?>"   class='input1'></td>
        <td><input type='text' placeholder='Class' name='wed1' value="<?php echo $row['wednesday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='thu1' value="<?php echo $row['thursday'];?>" class='input1'></td>
        <td><input type='text' placeholder='Class' name='fri1' value="<?php echo $row['friday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='sat1' value="<?php echo $row['saturday'];?>" class='input1'></td>
            </tr> 
            <?php
              
      } 
      elseif ($i==2) 
      {

          ?>
            </tr>      
        <td><input type='text' placeholder='Class' name='mon2' value="<?php echo $row['monday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='tue2' value="<?php echo $row['tuesday'];?>"   class='input1'></td>
        <td><input type='text' placeholder='Class' name='wed2' value="<?php echo $row['wednesday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='thu2' value="<?php echo $row['thursday'];?>" class='input1'></td>
        <td><input type='text' placeholder='Class' name='fri2' value="<?php echo $row['friday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='sat2' value="<?php echo $row['saturday'];?>" class='input1'></td>
            </tr> 
            <?php
           
      }
      elseif ($i==3) 
      {

          ?>
            </tr>      
        <td><input type='text' placeholder='Class' name='mon3' value="<?php echo $row['monday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='tue3' value="<?php echo $row['tuesday'];?>"   class='input1'></td>
        <td><input type='text' placeholder='Class' name='wed3' value="<?php echo $row['wednesday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='thu3' value="<?php echo $row['thursday'];?>" class='input1'></td>
        <td><input type='text' placeholder='Class' name='fri3' value="<?php echo $row['friday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='sat3' value="<?php echo $row['saturday'];?>" class='input1'></td>
            </tr> 
            <?php
           
      }
      elseif ($i==4) 
      {

          ?>
            </tr>      
        <td><input type='text' placeholder='Class' name='mon4' value="<?php echo $row['monday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='tue4' value="<?php echo $row['tuesday'];?>"   class='input1'></td>
        <td><input type='text' placeholder='Class' name='wed4' value="<?php echo $row['wednesday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='thu4' value="<?php echo $row['thursday'];?>" class='input1'></td>
        <td><input type='text' placeholder='Class' name='fri4' value="<?php echo $row['friday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='sat4' value="<?php echo $row['saturday'];?>" class='input1'></td>
            </tr> 
            <?php
           
      }
      elseif ($i==5) 
      {

          ?>
            </tr>      
        <td><input type='text' placeholder='Class' name='mon5' value="<?php echo $row['monday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='tue5' value="<?php echo $row['tuesday'];?>"   class='input1'></td>
        <td><input type='text' placeholder='Class' name='wed5' value="<?php echo $row['wednesday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='thu5' value="<?php echo $row['thursday'];?>" class='input1'></td>
        <td><input type='text' placeholder='Class' name='fri5' value="<?php echo $row['friday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='sat5' value="<?php echo $row['saturday'];?>" class='input1'></td>
            </tr> 
            <?php
           
      }
      elseif ($i==6) 
      {

          ?>
            </tr>      
        <td><input type='text' placeholder='Class' name='mon6' value="<?php echo $row['monday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='tue6' value="<?php echo $row['tuesday'];?>"   class='input1'></td>
        <td><input type='text' placeholder='Class' name='wed6' value="<?php echo $row['wednesday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='thu6' value="<?php echo $row['thursday'];?>" class='input1'></td>
        <td><input type='text' placeholder='Class' name='fri6' value="<?php echo $row['friday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='sat6' value="<?php echo $row['saturday'];?>" class='input1'></td>
            </tr>
            <?php
           
      }
      elseif ($i==7) 
      {

          ?>
            </tr>      
        <td><input type='text' placeholder='Class' name='mon7' value="<?php echo $row['monday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='tue7' value="<?php echo $row['tuesday'];?>"   class='input1'></td>
        <td><input type='text' placeholder='Class' name='wed7' value="<?php echo $row['wednesday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='thu7' value="<?php echo $row['thursday'];?>" class='input1'></td>
        <td><input type='text' placeholder='Class' name='fri7' value="<?php echo $row['friday'];?>"  class='input1'></td>
        <td><input type='text' placeholder='Class' name='sat7' value="<?php echo $row['saturday'];?>" class='input1'></td>
            </tr> 
            <?php
           
      }
        $i++;
     

      
  }
   
echo "<div class='but1'>
<input type='submit' value='Update'  class='but'>
</div>
</form>

</table>

</br></br>


</body>
</html> 

";














































  