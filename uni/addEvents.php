<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="calender";
$link=mysql_connect("$host", "$username", "$password")or die("Cannot Connect");
mysql_select_db("$db_name")or die("Cannot Select DB");
?>
<html>
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Nerd's Cafe</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
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
      <link rel="stylesheet" href="iutResult.css">
   </head>
   <!-- body -->
   <body class="main-layout inner_header about_page">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                          
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
</body>
</html>

<?php error_reporting (E_ALL ^ E_NOTICE);
// include_once('main.php');
// include_once('index.php');
// include_once('../../service/mysqlcon.php');

if(!empty($_POST['event'])){
$event = $_POST['event'];
$date= date("Y/m/d");
$r =(bool)$_POST['reminder'];
$sql="INSERT INTO events(EventName,Date, Reminder) VALUES ('$event','$date','$r')";
$query  =  mysql_query($sql);

if($query)
{
    echo '<script>alert("Event Added Succesfully")</script>';

}
else
{
    die('Could not Update data: '.mysql_error());
}
}
?>
