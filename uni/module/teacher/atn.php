<?php
include('main.php');


?>
        <html>
		
			<head>
              
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				</head>
		  <div class="header"><h1>Nerd's Cafe University Repository</h1></div>
			  <div class="divtopcorner">
				   
				</div>
				<form class="iutshort">
			<br/><br/>
				<ul>
				    <li class="manulista" align="center">
						    <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="updateAttendence.php">Update Attendence</a>
								<a class ="menulista" href="deleteatt.php">Delete Attendende</a>
								
								<div align="center">
								<h4>Hi! <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
		</html>
<center> <h1>Students Attendance</h1></center>
<?php
include('main.php');
echo('hello');
$cid=$_REQUEST['mycourse'];
$clid=$_REQUEST['myclass'];
echo '<form  action="makeattendance.php" method="post">';
$conn=mysql_connect('localhost','root','');
if(!$conn){
   die('error connecting ');
   }
   mysql_select_db('schoolmanagementsystemdb',$conn);
   echo('bhello');
  $sql="SELECT studentid FROM course where classid='$clid' and id='$cid' and teacherid='$check'";
  $res=mysql_query($sql);
  echo('chello');
 while($rn=mysql_fetch_array($res))
{
	echo "<center>";
	echo $rn['0'];
    echo "<input type='checkbox' checked='checked' name='attendance[]' value=".$rn[0]." /> <br /><br />";
   
   
     }
	 
   echo "<input class='menulista' type='submit' value='Make Attendance' />";
  echo " </form> </html>";
  echo "</center>";

?>