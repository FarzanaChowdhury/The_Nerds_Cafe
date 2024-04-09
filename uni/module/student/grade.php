<?php

include_once('main.php');
include_once('index.php');


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
?>