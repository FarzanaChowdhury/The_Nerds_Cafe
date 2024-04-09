<html>
<!-- 

// include_once('main.php');
// include_once('../../service/mysqlcon.php');


// $server_name="localhost";
// $username="root";
// $password="";
// $database_name="database_course";

// $conn=new mysql($server_name,$username,$password,$database_name);
// if ($conn->connect_error) {
//     die("Connection failed: "
//         . $conn->connect_error);
// }


// $str="";

?> -->


<head>

    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
    <script type="text/javascript" src="jquery-1.12.3.js"></script>
    <script type="text/javascript" src="studentClassCourse.js"></script>
    <script src="JS/login_logout.js"></script>


</head>
 
<body>
    <div class="header">
        <h1>Nerd's Cafe University Repository</h1>
    </div> 
    <div class="divtopcorner">
      
    </div>
    
    <div class="iutshort">
        <br /><br />
        <ul>
				    <li class="manulist">
						    <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="updateTeacher.php">Update Profile</a>
								<a class ="menulista" href="viewProfile.php">View Profile</a>
								<a class ="menulista" href="course.php">Students Grade</a>
								<a class ="menulista" href="courses.php">Courses</a>
								<br>
								
						</li>
				</ul>
        <hr />
<br><br>
        <p style="padding-left : 50px"> Please use
            <a href="Marksheet_Template.xlsx" download>this</a>
            template to upload your marksheet without error
        </p> 


        <?php

        $server_name = "localhost";
        $username = "root";
        $password = "";
        $database_name = "schoolmsdb";

        $conn = new mysqli($server_name, $username, $password, $database_name);
        if ($conn->connect_error) {
            die("Connection failed: "
                . $conn->connect_error);
        }



        use Shuchkin\SimpleXLSX;

        echo '';


        if (isset($_FILES['excel']['name'])) {
            include "xlsx.php";



            $excel = SimpleXLSX::parse($_FILES['excel']['tmp_name']);
            echo '<pre>';
            $i = 0;
            //  print_r($excel->rows());
            foreach ($excel->rows() as $key => $row) {

                $q = " ";
                foreach ($row as $key => $cell) {
                    if ($i == 0) {
                        //    $q. so that it keeps adding the contents
                        $q .= $cell . " varchar(50),"; //So that all types will be varchar in Create table query
                    } else {

                        $q .= "'" . $cell . "',";
                    }
                }
                if ($i == 0) {
                    $sql_query = "CREATE OR REPLACE TABLE " . $excel->sheetname(0) . " (" . rtrim($q, ",") . ");";
                } else {
                    $sql_query = "INSERT INTO " . $excel->sheetname(0) . " VALUES (" . rtrim($q, ",") . ");";
                }
                if (mysqli_query($conn, $sql_query)) {
                }
                $i++;
            }

            echo '
    <script>
    alert("File Added");
    </script>';


             echo "<script> location.href='course.php'; </script>";

            $qq = "SELECT * FROM " . $excel->sheetname(0) . ";";

            $s_query = mysqli_query($conn, $qq);

            echo '<div id="r_table">';
            echo '<table border=2>';
            echo '<caption style="caption-side: top">';
            echo $excel->sheetname(0);
            echo '</caption>';
            echo '<tr>';
            echo '<th>';
            echo "Student ID";
            echo '</th>';
            echo '<th>';
            echo "Marks";
            echo '</th>';
            echo '<th>';
            echo "Grade";
            echo '</th>';
            echo '</tr>';

            while ($row = mysqli_fetch_array($s_query)) {
                echo '<tr>';
                echo '<td>';
                echo $row[0];
                echo '</td>';
                echo '<td>';
                echo $row[1];
                echo '</td>';
                echo '<td>';
                echo $row[2];
                echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</div>';
        }

        ?>



        <div class="t_home">
            <div class="upload" style="padding-left: 50px">

                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="excel">
                    <input type="submit" name="submit" id="r_sub">
                </form>
            </div>

        </div>


        <script src="Teacher.js"></script>
<br><br><br>
        <div alignItem="center">
					
				<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
		</div>
</body>

</html>