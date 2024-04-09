<?php

include_once('main.php');
include_once('index.php');
include_once('../../service/mysqlcon.php');
?>


<html>
    <div style="padding : 50px">
<div style="display:none">
<form method="POST" action="updateStudentGrade.php" style="color : white">
<label>Student id:  <input type='text' name='stdid'> </label><br>
<label>Course id:  <input type='text' name='cid'> </label><br>
<label>Grade:  <input type='text' name='grade'> </label><br >
<input class='menulista' type='submit' value='(error)' name='sbmt'>
</form>
</div>
<!-- <form method="POST" action="updateStudentGrade.php" style="font-size: 1.5rem">
<label>Student id:  <input type='text' name='stdid'> </label><br>
<label>Course id:  <input type='text' name='cid'> </label><br>
<label>Grade:  <input type='text' name='grade'> </label><br >
<input class="menulista" type = "Submit" value ="Update Grade" name="sbmt">
</form> -->

<form method="POST" action="updateStudentGrade.php" style="font-size: 1.5rem">
<label>Course id :  <input type='text' name='cid'> </label><br>
<label>Student id:  <input type='text' name='stdid'> </label><br>
<label>Exam &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  <input type='text' name='exam'> </label><br >
<label>Mark &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  <input type='text' name='mark'> </label><br ><br>
<input class="menulista" type = "Submit" value ="Update Grade" name="sbmt">
</form>

</div>
</html>



