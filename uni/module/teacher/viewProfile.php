<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include_once('index.php');
?>
<html>
<body>



<div class="text" style="font-size:25px">
<?php
$sql = "SELECT * FROM teachers WHERE id='$check';";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
   echo "<center>";
   echo "ID: ".$row['id']."<br />";
   echo "Name: ".$row['name']."<br />";
   echo "Phone: ".$row['phone']."<br />";
   echo "Date of Birth: ".$row['dob']."<br />";
   echo "Phone ".$row['phone']."<br />";
   echo "Email Address: ".$row['email']."<br />";
   echo "Gender: ".$row['sex']."<br />";
   echo "</center>";
   
}
?>
</div>
</body>
</html>