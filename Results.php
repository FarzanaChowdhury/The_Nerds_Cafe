<?php

use Shuchkin\SimpleXLSX;
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
        $sql_query="CREATE OR REPLACE TABLE ".$excel->sheetname(0)." (".rtrim($q,",").");";
    }
    else
    {
        $sql_query="INSERT INTO ".$excel->sheetname(0)." VALUES (".rtrim($q,",").");";
    }
    if(mysqli_query($conn,$sql_query))
    {

    }
    $i++;

    
    }


    $qq="SELECT * FROM ". $excel->sheetname(0).";";

    $s_query=mysqli_query($conn,$qq);
 
    echo'<table border=2>';
    echo'<caption>';echo $excel->sheetname(0); echo'</caption>';
    echo'<tr>';
    echo'<th>'; echo "Student ID"; echo'</th>';
    echo'<th>'; echo "Marks"; echo'</th>';
    echo'<th>'; echo "Grade"; echo'</th>';
    echo'</tr>';

    while ($row = mysqli_fetch_array($s_query))
   {
        echo'<tr>';
        echo'<td>'; echo $row[0]; echo'</td>';
        echo'<td>'; echo $row[1];echo'</td>';
        echo'<td>'; echo $row[2];echo'</td>';
        echo'</tr>';


   }
        echo'</table>';

}




?>
</html>