
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $query=mysqli_query($conn, "SELECT * FROM entry_details WHERE email='".$email."'");  
	 $numrows=mysqli_num_rows($query); 
	 echo $numrows; 
	if(!$numrows)
	 {
		
	$sql_query = "INSERT INTO entry_details (first_name,last_name,gender,email,mobile)
	 VALUES ('$first_name','$last_name','$gender','$email','$phone')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
		readfile('index.html');
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	}
	else
	{
		header("Location: sample_register.html");
		
		//$SOS="The user already exists";
		//echo "The user already exists!";
	}
	 mysqli_close($conn);
}
if(isset($_POST['login']))
{	
	 
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $query=mysqli_query($conn, "SELECT * FROM entry_details WHERE email='".$email."'");  
	 $numrows=mysqli_num_rows($query); 
	  
	if($numrows)
	 {
		
	echo "Successful Login!";
	}
	else
	{
		//header("Location: sample_register.html");
		
		//$SOS="The user already exists";
		echo "No user exists!";
	}
	 mysqli_close($conn);
}
?>