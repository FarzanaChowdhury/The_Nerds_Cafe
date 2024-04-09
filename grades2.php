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
$query=mysqli_query($conn, "SELECT OS, Micro FROM login_details WHERE User_ID='".$username."'");  
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
    <body>
    <table id="customers">
  <tr>
    <th>Course Code</th>
    <th>Grade</th>
    <tr>
            <td><b>CSE 4501</td>
            <td><b><?php echo $row[0];?></td>
        </tr>
        <tr>
            <td><b>CSE 4503</strong></td>
            <td><b><strong><?php echo $row[1];?></strong></td>
        </tr>
        

 
</table>
</body>
</main>
 
    </html>