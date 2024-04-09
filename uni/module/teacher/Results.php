<html>
    <head>
    <link rel="stylesheet" href="Teacher.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <body class="main-layout inner_header about_page">

      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <img id="menu" src="images\Hamburger.png" style="height:30px">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                     
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <div class="nav-item dropdown">
                                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Academics</a>
                                 <div class="dropdown-menu m-0">
                                     <a href="support.html" class="dropdown-item">Admission Support</a>
                                     <a href="result.html" class="dropdown-item">Admission Result</a>
                                     <a href="tution.html" class="dropdown-item">Tution</a>
                                     <a href="iutresult.html" class="dropdown-item">IUT Result</a>
                                 </div>
                             </div>
                              <li class="nav-item">
                                 <a class="nav-link" href="blog.html">Blog</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="btn btn-primary  d-none d-lg-block" href="Sample_register.html" style="margin: -0.5rem;">Join Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->




<?php


$server_name="localhost";
$username="root";
$password="";
$database_name="database_course";

$conn=new mysqli($server_name,$username,$password,$database_name);
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}


use Shuchkin\SimpleXLSX;
echo''
;


if(isset($_FILES['excel']['name']))
{
    include "xlsx.php";



    $excel=SimpleXLSX::parse($_FILES['excel']['tmp_name']);
    echo'<pre>';
    $i=0;
    //  print_r($excel->rows());
    foreach($excel->rows() as $key => $row )
    {
       
    $q=" ";
    foreach ($row as $key => $cell){
    if($i==0)
    {
    //    $q. so that it keeps adding the contents
        $q.=$cell." varchar(50),"; //So that all types will be varchar in Create table query
    }
   
    else
    {

        $q.="'".$cell."',";
    }
   
}
    if($i==0)
    {
        $sql_query="CREATE OR REPLACE TABLE ".$excel->sheetname(0)." (".rtrim($q,",").");";
    }
    else
    {
        $sql_query="INSERT INTO ".$excel->sheetname(0)." VALUES (".rtrim($q,",").");";
    }
    if(mysqli_query($conn,$sql_query))
    {

    }
    $i++;

    
    }

    echo'
    <script>
    alert("File Added");
    </script>';


   //  echo "<script> location.href='Teacher_Homepage.php'; </script>";

    $qq="SELECT * FROM ". $excel->sheetname(0).";";

    $s_query=mysqli_query($conn,$qq);
    
    echo'<div id="r_table">';
    echo'<table border=2>';
    echo'<caption style="caption-side: top">';echo $excel->sheetname(0); echo'</caption>';
    echo'<tr>';
    echo'<th>'; echo "Student ID"; echo'</th>';
    echo'<th>'; echo "Marks"; echo'</th>';
    echo'<th>'; echo "Grade"; echo'</th>';
    echo'</tr>';
    
    while ($row = mysqli_fetch_array($s_query))
    {
        echo'<tr>';
        echo'<td>'; echo $row[0]; echo'</td>';
        echo'<td>'; echo $row[1];echo'</td>';
        echo'<td>'; echo $row[2];echo'</td>';
        echo'</tr>';
    
    
    }
        echo'</table>';
        echo '</div';

}




?>



    <div class="t_home">
        <div class="sidebar">
                <p>Profile</p>
                <p>Courses</p>
        </div>
        <div class="upload">
       
<form action="" method ="POST" enctype="multipart/form-data">
<input type="file" name="excel">
<input type="submit" name="submit" id="r_sub"> 
</form>
</div>

</div>


<script src="Teacher.js"></script>
</body>
</html>