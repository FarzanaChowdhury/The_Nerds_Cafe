<?php

include_once('main.php');
include_once('index.php');

// 
// $stid=$_REQUEST['mystudent'];
// $crsid=$_REQUEST['mycourse'];


?>
<?php

if(!empty($_POST["select_course"])){

    if(!empty($_POST["courseName"])){
    $c_name=$_POST["courseName"];
echo '<div align="center" style="font-size : 1.5rem; color : white; padding : 20px">';
echo $c_name;
echo '</div>';

$sql = "SELECT * FROM $c_name";
$gradeQuery =mysql_query($sql);
echo "<table align="."'center'"." border = "."'1'"." cellpadding = "."'6'".">
<tr><td>Student ID</td> <td> Quiz1</td> <td> Quiz2</td> <td> Quiz3</td> <td> Quiz4</td> <td>Mid Semester</td> <td> Final Semester </td> <td> Grade</td></tr>";
while ($row = mysql_fetch_assoc($gradeQuery))
{
//  echo "<tr><td>".$row["id"]."</td>";
 echo "<td>".$row["Student_ID"]."</td>";
 echo "<td>".$row["Quiz1"]."</td>";
 echo "<td>".$row["Quiz2"]."</td>";
 echo "<td>".$row["Quiz3"]."</td>";
 echo "<td>".$row["Quiz4"]."</td>";
 echo "<td>".$row["Mid_Semester"]."</td>";
 echo "<td>".$row["Final_Semester"]."</td>";
 echo "<td>".$row["Grade"]."</td>";
 echo "</tr>";
}
echo "</table>";

 }
}

?>