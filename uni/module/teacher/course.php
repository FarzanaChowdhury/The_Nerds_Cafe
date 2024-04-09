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
    <body  onload="ajaxRequestToGetMyCourse();">
             
	
	
			 <?php include('index.php'); ?>
			 <!-- <form action="grade.php" method="POST"> -->
			  <div align="center" style="margin-top:20px">
			
 <!-- <div style="display:none">
<form method="POST" action="grade.php">
<input class="link" type ="submit" value="Grade" name="submit"/>
<input class="link" type ="submit" value="Update Grade" name="update"/>
</form> 
</div> -->

<form method="POST" action="grade.php">
<input class="link" type ="submit" value="Grade" name="submit"/>
<input class="link" type ="submit" value="Update Grade" name="update"/>
</form>
<button class="link"><a href="uploadResults.php">Upload Marks</button>


</div>					
							
		</body>
</html>
