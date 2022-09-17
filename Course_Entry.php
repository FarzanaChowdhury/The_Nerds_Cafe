<?php

use Shuchkin\SimpleXLSX;
$server_name="localhost";
$username="root";
$password="";
$database_name="database_course";

$conn=new mysqli($server_name,$username,$password,$database_name);
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

if(isset($_POST['add']) && !empty($_POST['c_code']))
{
$Course_Code=$_POST['c_code'];
$Course_Name=$_POST['c_name'];

$query="INSERT INTO courses(Course_Code,Course_Name)
VALUES('$Course_Code','$Course_Name')";


$duplicate=mysqli_query($conn,"SELECT Course_Code FROM courses WHERE Course_Code='$Course_Code'");

if(mysqli_num_rows($duplicate)>0){
    echo"Course Already Exists";
}
else{
    $run=mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
        echo"Course Added";
    }
    else{
        echo"Submission failed<br>
        Error : ". $sql . "" . mysqli_error($conn);
    }
} 

}
else if(!isset($_POST['add']))
{
   echo"Hello";
}
else
{
    echo"Enter Course code";
}

echo'
<br><br>
<form action="" method ="POST" enctype="multipart/form-data">
<input type="file" name="excel">
<input type="submit" name="submit"> 
</form>';


if(isset($_FILES['excel']['name']))
{
    include "xlsx.php";



    $excel=SimpleXLSX::parse($_FILES['excel']['tmp_name']);
    echo'<pre>';
    $i=0;
    //  print_r($excel->rows());
    foreach($excel->rows() as $key => $row )
    {
       
    $q=" ";
    foreach ($row as $key => $cell){
    if($i==0)
    {
    //    $q. so that it keeps adding the contents
        $q.=$cell." varchar(50),"; //So that all types will be varchar in Create table query
    }
   
    else
    {

        $q.="'".$cell."',";
    }
   
}
    if($i==0)
    {
        $sql_query="CREATE TABLE ".$excel->sheetname(0)." (".rtrim($q,",").");";
    }
    else
    {
        $sql_query="INSERT INTO ".$excel->sheetname(0)." VALUES (".rtrim($q,",").");";
    }
    if(mysqli_query($conn,$sql_query))
    {
        echo "true";
    }
    $i++;
    echo $sql_query; 
    echo'<br>';
    
    }
  
 

}
?>
</html>