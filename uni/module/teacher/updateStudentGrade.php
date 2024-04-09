<?php

include_once('main.php');
include_once('index.php');
include_once('../../service/mysqlcon.php');

if(!empty($_POST['stdid'])){



    $sql="SELECT * FROM grade";
$res=mysql_query($sql);
$row = mysql_fetch_array($res);
// while($row = mysql_fetch_array($res)){

echo "";


// $sGrade = $_POST['grade'];
$ID = $_POST['stdid'];
$courseID =$_POST['cid'];
$Exam = $_POST['exam'];
$Mark = $_POST['mark'];

$Update = "UPDATE $courseID SET $Exam = '$Mark' WHERE Student_ID = '$ID'";
// $Update = "UPDATE grade SET grade='$sGrade' WHERE studentid= '$ID' AND courseid = '$courseID'";
$sqlQuery = mysql_query($Update,$link);

if($sqlQuery)
{
    echo " Succesfully Updated";

}
else
{
    die('Could not Update data: '.mysql_error());
}
}
// }
?>