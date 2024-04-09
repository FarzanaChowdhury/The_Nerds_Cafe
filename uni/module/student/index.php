<?php
include_once('main.php');

$st=mysql_query("SELECT *  FROM students WHERE id='$check' ");
$stinfo=mysql_fetch_array($st);

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
             		 
			 <div class="header"><h1>Nerds Cafe University Repository</h1></div>
			  <div class="divtopcorner">
				   
				</div>
				<form class="iutshort">
			<br/><br/>
				<ul>
				    <li class="manulist" >
						    <a class ="menulista" href="index.php">Home</a>
							<a class ="menulista" href="viewProfile.php">View Profile</a>
						        <a class ="menulista" href="modify.php">Change Password</a>
								<!-- <a class ="menulista" href="course.php">My Course And Result</a> -->
								<a class ="menulista" href="grade.php">My Course And Result</a>
								<a class ="menulista" href="exam.php">My Exam Schedule</a>
								<a class ="menulista" href="attendance.php">My Attendance</a>
								
								<div align="center">
								<h4>Hi!Student <?php echo $check." ";?> </h4>
								<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						
				    
			
						</li>
				</ul>
			  <hr/>
			  
		</body>
</html>

