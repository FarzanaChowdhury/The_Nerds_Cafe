<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateExamSchedule.js"></script>
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
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getExamScheduleForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Only One Exam Schedule Can Update at a time.</h2>
            <form action="#" method="post">
                <table border="1" cellpadding="6" id='updateExamSchedule'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $examdate = $_POST['examdate'];
    $examtime = $_POST['examtime'];
    $courseid = $_POST['courseid'];
    $sql = "UPDATE examschedule SET id='$id', examdate='$examdate', time='$examtime', courseid='$courseid' WHERE id='$id'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not Update data: '.mysql_error());
    }
    echo "Update data successfully\n";
}
?>
