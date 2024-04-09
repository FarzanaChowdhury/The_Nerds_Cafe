<?php
include_once('main.php');

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head>
    <body>
             
	
	
			 <?php include('index.php'); ?>
<html>

<form method="POST" action="uploadResults.php">
<input class="menulista link" type ="submit" value="Quiz 1" name="Q1"/>
<input class="menulista link" type ="submit" value="Quiz 2" name="Q2"/>
<input class="menulista link" type ="submit" value="Quiz 3" name="Q3"/>
<input class="menulista link" type ="submit" value="Quiz 4" name="Q4"/>
<input class="menulista link" type ="submit" value="Mid Semester" name="M_Sem"/>
<input class="menulista link" type ="submit" value="Final Semester" name="F_Sem"/>
</form>
</html>