<?php

include_once('main.php');
 include_once('index.php');

// 
// $stid=$_REQUEST['mystudent'];
// $crsid=$_REQUEST['mycourse'];

?>


<?php


//print_r($_REQUEST);
// $string="<form align='center' action='succeed.php'>
// student id:  <input type='text' value='$stid' name='stdid' readonly /> <br />
// Course id:  <input type='text' value='$crsid' name='crid' readonly /> <br />
// Grade:  <input type='text' name='grade' /> <br />
// <input class='menulista' type='submit' value='grade' name='sbmt' />
// ";
if(!empty($_POST['submit'])){


    // header("Location: http://localhost/Student-Admin/Student-Admin/module/teacher/showGrade.php");


    echo '<div>
    <div  style="display : none">
    <form method="POST" action="showGrade.php">
    <input type="text" name="courseName">
    <input class="menulista" type="submit" name ="select_course">
   </form>
   </div>';

   echo '
   <form method="POST" action="showGrade.php">
   Enter Course Code : 
   <input type="text" name="courseName">
   <input class="menulista" type="submit" name ="select_course">
  </form>
</div>';



// if(isset($_GET['$select_course'])){

//     $c_name=$_GET['course_name'];
// $sql = "SELECT * FROM $c_name";
// $gradeQuery =mysql_query($sql);
// echo "<table align="."'center'"." border = "."'1'"." cellpadding = "."'6'".">
// <tr><td>ID</td> <td>Student ID</td> <td> Quiz1</td> <td> Quiz2</td> <td> Quiz3</td> <td> Quiz4</td> <td>Mid Semester</td> <td> Final Semester </td> <td> Grade</td></tr>";
// while ($row = mysql_fetch_assoc($gradeQuery))
// {
// //  echo "<tr><td>".$row["id"]."</td>";
//  echo "<td>".$row["Studentid"]."</td>";
//  echo "<td>".$row["Quiz1"]."</td>";
//  echo "<td>".$row["Quiz2"]."</td>";
//  echo "<td>".$row["Quiz3"]."</td>";
//  echo "<td>".$row["Quiz4"]."</td>";
//  echo "<td>".$row["Mid_Semester"]."</td>";
//  echo "<td>".$row["Final_Semester"]."</td>";
//  echo "<td>".$row["Grade"]."</td>";
//  echo "</tr>";
// }
// echo "</table>";

//  }
}
?>

<?php 

if(!empty($_POST['update'])){

header("Location: http://localhost/Nerd_s Cafe updated Frontend/Nerds Cafe/uni/module/teacher/studentGrade.php");


}

?>