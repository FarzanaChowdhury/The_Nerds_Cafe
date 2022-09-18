<?php

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
include "Results.php";
?>