<?php 

SESSION_START();

require("Blog/include/db-conn.php");

if (isset($_POST['cntBTN'])) {

	$cntName = mysqli_real_escape_string($conn, $_POST['cntName']);
	$cntEmail = mysqli_real_escape_string($conn, $_POST['cntEmail']);
	$cntMSG = mysqli_real_escape_string($conn, $_POST['cntMSG']);

	$query = mysqli_query($conn, "INSERT INTO `contacts`(`name`,`email`,`message`,`date`)VALUES('$cntName','$cntEmail','$cntMSG',now())");
	if ($query) {
		$_SESSION['errorMSG']="<font class='text-success'>Successfully Sent!</font>";
		header("location: ./contact.php");
		
	}else{
		$_SESSION['errorMSG']="<font class='text-danger'>sending fail!</font>";
		header("location: ./contact.php");
	}
	
}



?>