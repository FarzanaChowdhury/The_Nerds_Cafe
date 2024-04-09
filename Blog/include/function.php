<?php

SESSION_START();

require("db-conn.php");

if (isset($_POST['cmtBTN'])) {
	$post_id = mysqli_real_escape_string($conn, $_POST['post_id']);
	$slug = mysqli_real_escape_string($conn, $_POST['slug']);
	$cmtName = mysqli_real_escape_string($conn, $_POST['cmtName']);
	$cmtEmail = mysqli_real_escape_string($conn, $_POST['cmtEmail']);
	$cmtMSG = mysqli_real_escape_string($conn, $_POST['cmtMSG']);

	$query = mysqli_query($conn, "INSERT INTO `comments`(`post_id`, `name`, `email`, `message`, `status`, `date`) VALUES ('$post_id','$cmtName','$cmtEmail','$cmtMSG','0',now())");
	if ($query) {
		$_SESSION['errorMSG']="<font class='text-primary'>Comment Successful! Wait for approval</font>";
		header("location: ../single-post.php?slug=$slug");
	}else{
		$_SESSION['errorMSG']="<font class='text-danger'>Comment failed try again</font>";
		header("location: ../single-post.php?slug=$slug");
	}
}

if (isset($_POST['cntBTN'])) {

	$cntName = mysqli_real_escape_string($conn, $_POST['cntName']);
	$cntEmail = mysqli_real_escape_string($conn, $_POST['cntEmail']);
	$cntMSG = mysqli_real_escape_string($conn, $_POST['cntMSG']);

	$query = mysqli_query($conn, "INSERT INTO `contacts`(`name`,`email`,`message`,`date`)VALUES('$cntName','$cntEmail','$cntMSG',now())");
	if ($query) {
		$_SESSION['errorMSG']="<font class='text-success'>Successfully Sent!</font>";
		header("location: ../index.php");
		
	}else{
		$_SESSION['errorMSG']="<font class='text-danger'>sending fail!</font>";
		header("location: ../index.php");
	}
	
}

if (isset($_POST['publish_new'])) {
	
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$slug = mysqli_real_escape_string($conn, $_POST['slug']);
	$post_Content = mysqli_real_escape_string($conn, $_POST['post_Content']);


	$fileUpload = $_FILES['FileUpload']['name'];
	$file_tmp = $_FILES['FileUpload']['tmp_name'];

	$rand_name = rand(00000000,99999999);
	$exp = explode(".",$fileUpload);
    $exten = end($exp);

	$cate = mysqli_real_escape_string($conn, $_POST['cate']);
	$describ = mysqli_real_escape_string($conn, $_POST['describ']);
	$keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);

	move_uploaded_file($file_tmp,'../images/blog-images/'.$rand_name.'.'.$exten);
	$uploadURL='http://localhost/Nerds%20Cafe/Blog/images/blog-images/'.$rand_name.'.'.$exten;

	$query = mysqli_query($conn, "INSERT INTO `all_posts`(`title`, `cate`, `slug`, `banner`, `content`, `describ`, `keyword`, `status`, `date`) VALUES ('$title','$cate','$slug','$uploadURL','$post_Content','$describ','$keyword','$status',now())");
	if ($query) {
		$_SESSION['errorMSG']='<font color="green">Added post Successfully! Wait for Approval</font>';
		header("location: ../all-posts.php");		
	}else{
		$_SESSION['errorMSG']='<font color="red">Upload failed</font>';
		header("location: ../all-posts.php");	
	}

}

?>