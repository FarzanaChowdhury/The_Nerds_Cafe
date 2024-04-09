<?php
include_once('main.php');
?>
<html>
    <head>
		    <!-- <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css"> -->
			<link rel="stylesheet" href="repositoryStyles.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
			  
			  <div class="divtopcorner">
				   
				</div>
				<div class="header">
          <img class="logo" src="../../source/NerdsCafeRepo.png">

		</div>
				<nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a class="navlinks" href="home.php">Home</a></li>
              <li><a class="navlinks" href="viewProfile.php">View Profile</a></li>
              <li><a class="navlinks" href="course.php">Students Grade</a></li>
              <li><a class="navlinks" href="examschedule.php">Exam Schedule</a></li>
              <li><a class="navlinks" href="updateTeacher.php">Update Profile</a></li>
              <li><a class="navlinks" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a></li>
          </ul>	
		</div>

		
  </nav>



				<!-- <form class="iutshort">
			<br/><br/>
				<ul>
				    <li class="manulist">
						    <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="updateTeacher.php">Update Profile</a>
								<a class ="menulista" href="viewProfile.php">View Profile</a>
								<a class ="menulista" href="course.php">Students Grade</a>
								<a class ="menulista" href="courses.php">Courses</a>
								<a class ="menulista" href="examschedule.php">Exam Schedule</a>
						
								<div align="center">
								<h4>Hi! <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/> -->
		</body>
</html>
