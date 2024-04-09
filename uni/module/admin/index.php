<?php
include_once('main.php');
?>
<html>
    <head>
			<link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			
				<script src = "JS/login_logout.js"></script>
		</head>
		
		<body>
			  <div class="header"><h1>Nerd's Cafe University Repository</h1></div>
			  <div class="divtopcorner">
				    
				</div>
				<section class="iut">
			<br/><br/>
			<br/><br/>
			<br/><br/>
			<br/><br/>
			<br/><br/>
			
				<ul>
				    <li class="manulist">
						    <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="manageStudent.php">Manage Student</a>
								<a class ="menulista" href="manageTeacher.php">Manage Teacher</a>
								<a class ="menulista" href="manageParent.php">Manage Parent</a>
								<a class ="menulista" href="manageStaff.php">Manage Staff</a>
								<a class ="menulista" href="course.php">Course</a>
								<a class ="menulista" href="attendance.php">Attendance</a>
								<a class ="menulista" href="examSchedule.php">Exam Schedule</a>
								
								<div align="center">
								<h4><br>Welcome Back to Nerd's Cafe, Admin <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
		</body>

</html>
