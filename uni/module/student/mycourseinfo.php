<?php  
include_once('main.php');
 $em = $_REQUEST['id'];


$courseinfo = "SELECT * FROM grade WHERE courseid='$em' and studentid='$check'";
$resc = mysql_query($courseinfo);


while($r=mysql_fetch_array($resc))
{
    echo "<tr>
    <td>Grade:</td>
     <td>",$r['grade'],"<td></tr>";
 
 echo "<tr> 
 <td>Quiz 1:</td>
 <td>",$r['q1'],"<td></tr>";

 echo "<tr>
 <td>Quiz 2:</td>
 <td>",$r['Quiz 2'],"<td></tr>";

 echo "<tr>
 <td>Quiz 3:</td>
 <td>",$r['Quiz 3'],"<td></tr>";

 echo "<tr>
 <td>Quiz 4:</td>
 <td>",$r['Quiz 4'],"<td></tr>";

 echo "<tr>
 <td>Mid Semester Exam:</td>
 <td>",$r['Mid Semester'],"<td></tr>";

 echo "<tr>
 <td>Final Semester Exam:</td>
 <td>",$r['Final Semester'],"<td></tr>";
 


}



