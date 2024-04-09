<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');

$sql = "SELECT * FROM examschedule WHERE  MONTH(examdate) = MONTH(CURRENT_DATE) AND YEAR(examdate)=YEAR(CURRENT_DATE)";
$res= mysql_query($sql);
$string = "<tr>
               <th>ID</th>
               <th>Exam Date</th>
               <th>Time</th>
               <th>Course Id</th>
           </tr>";
while($row = mysql_fetch_array($res)){
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['examdate'].
    '</td><td>'.$row['time'].'</td><td>'.$row['courseid'].'</td></tr>';
}
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
			<br/><br/>
				<ul>
				    <li class="manulist">
					<a class ="menulista" href="index.php">Home</a>
                <a class ="menulista" href="createExamSchedule.php">Create Exam Schedule</a>
								<a class ="menulista" href="viewExamSchedule.php">View Exam Schedule</a>
								<a class ="menulista" href="updateExamSchedule.php">Update Exam Schedule</a>
								<a class ="menulista" href="examSchedule.php">Exam Schedule</a>
								
								<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Exam Schedule List</h2>
            <table border="1">
                <?php echo $string; ?>
            </table>
        </center>
		</body>
</html>
