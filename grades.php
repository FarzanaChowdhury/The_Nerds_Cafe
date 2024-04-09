<html>
    
<meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    <link rel="stylesheet" href="admin.css" />
 
<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

$username=190041101;
$query=mysqli_query($conn, "SELECT Password FROM login_details WHERE User_ID='".$username."'");  
$numrows=mysqli_num_rows($query); 
     //$results = mysqli_query ($conn, $query);
     //$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
     //echo row;
     $row = mysqli_fetch_row($query);
     $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
      //echo $row[0];
      //echo $row[1];
	  //echo $numrows;
	
    
	 mysqli_close($conn);



?>
    <body>
    <!-- (A) SIDEBAR -->
    <div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser">
        <i class="txt">Student Information System</i>
      </div>

      <!-- (A2) MENU ITEMS -->
      <a href="#" class="current">
        <i class="ico">&#9733;</i>
    
        <button class="button button2" onclick="window.location.href='grades.php';">Profile</button>

      </a>
      <a href="#">
        <i class="ico">&#9728;</i>
        <button class="button button2" onclick="window.location.href='grades1.php';">Courses Taken</button>
        
      </a>
      <a href="#">
        <i class="ico">&#9737;</i>
        <button class="button button2" onclick="window.location.href='grades2.php';">Result</button>
      </a>
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
    <img src="iut.jpg" alt="descriptive text" width=1080px>
    <table id="customers">
  <tr>
    <th><b>Student </th>
    <th><b>Information</th>
    
  </tr>
  <tr>
    <td><b>Name</td>
    <td><b>Sidratul Tanzila Tasmi</td>
    
  </tr>
  <tr>
     <td><b>ID</td>
    <td><b>190041138</td>
  </tr>
  <tr>
     <td><b>Fathers Name</td>
    <td><b>Md.Shariful Alam</td>
  </tr>
  <tr>
    <td><b>Mothers Name</td>
    <td><b>Shyeda Hayatun Nur</td>
  </tr>
  <tr>
    <td><b>Semester</td>
    <td><b>5th</td>
  <tr>
    <td><b>Academic Year</td>
    <td><b>2021-2022</td>
  </tr>
 
</table>

</body>
</main>
    </html>