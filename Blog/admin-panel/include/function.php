<?php

SESSION_START();

require("db-conn.php");

if (isset($_POST['loginBTN'])) {

	$uName = mysqli_real_escape_string($conn, $_POST['uName']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	$hashPWD = md5($pwd);

	$query = mysqli_query($conn, "SELECT * FROM admin_panel WHERE email='$uName' AND pwd='$hashPWD' LIMIT 1");
	$checkQuery = mysqli_num_rows($query);
	if ($checkQuery) {
		$_SESSION['LoggedIN']=$uName;
		header("location: ../index.php");
	}else{
		$_SESSION['errorMSG']="<font color='red'>Wrong username and password</font>";
		header("location: ../login.php");
	}
	
}

if(isset($_GET['logout'])){
	unset($_SESSION['LoggedIN']);
	header("location: ../login.php");
}

if (isset($_GET['delPost'])) {
	$post_id = mysqli_real_escape_string($conn, $_GET['delPost']);

	if (!empty($post_id)) {

		$delQuery = mysqli_query($conn, "DELETE FROM `all_posts` WHERE post_id='$post_id' LIMIT 1");
		if ($delQuery) {
			$_SESSION['errorMSG']='<font color="green">Delete Successfully</font>';
			header("location: ../all-posts.php");
		}else{
			$_SESSION['errorMSG']='<font color="red">Sorry try again/font>';
			header("location: ../all-posts.php");
		}
		
	}else{
		$_SESSION['errorMSG']='<font color="red">Please click on Delete</font>';
		header("location: ../all-posts.php");
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

	move_uploaded_file($file_tmp,'../../images/blog-images/'.$rand_name.'.'.$exten);
	$uploadURL='http://localhost/blog/images/blog-images/'.$rand_name.'.'.$exten;

	$query = mysqli_query($conn, "INSERT INTO `all_posts`(`title`, `cate`, `slug`, `banner`, `content`, `describ`, `keyword`, `status`, `date`) VALUES ('$title','$cate','$slug','$uploadURL','$post_Content','$describ','$keyword','$status',now())");
	if ($query) {
		$_SESSION['errorMSG']='<font color="green">Added post Successfully!</font>';
		header("location: ../all-posts.php");		
	}else{
		$_SESSION['errorMSG']='<font color="red">Upload failed</font>';
		header("location: ../all-posts.php");	
	}

}

if (isset($_POST['updatePost'])) {

	$post_id = mysqli_real_escape_string($conn, $_POST['post_id']);
	$title = mysqli_real_escape_string($conn, $_POST['title']);
    $cate = mysqli_real_escape_string($conn, $_POST['cate']);
    $slug = mysqli_real_escape_string($conn, $_POST['slug']);
    $content = mysqli_real_escape_string($conn, $_POST['post_Content']);
    $describ = mysqli_real_escape_string($conn, $_POST['describ']);
    $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);


    if (isset($_FILES['FileUpload'])) {
    	$fileUpload = $_FILES['FileUpload']['name'];
    	$tmpUpload = $_FILES['FileUpload']['tmp_name'];
    	$destine = "http://localhost/Nerds%20Cafe/Blog/images/blog-images/".$fileUpload;
    	$uploadBanner = move_uploaded_file($tmpUpload, "../../images/blog-images/".$fileUpload);
    	if ($uploadBanner) {
    		$update = mysqli_query($conn, "UPDATE `all_posts` SET `title`='$title',`cate`='$cate',`slug`='$slug',`banner`='$destine',`content`='$content',`describ`='$describ',`keyword`='$keyword',`status`='$status' WHERE post_id='$post_id'");
    		if ($update) {
    			$_SESSION['errorMSG']='<font color="green">Update Successfully</font>';
				header("location: ../publish-post.php?updateID=".$post_id."");    		    
    		}else{
    			$_SESSION['errorMSG']='<font color="red">Update failed</font>';
				header("location: ../publish-post.php?updateID=".$post_id."");
    		}    		
    	}else{
    		$update = mysqli_query($conn, "UPDATE `all_posts` SET `title`='$title',`cate`='$cate',`slug`='$slug',`content`='$content',`describ`='$describ',`keyword`='$keyword',`status`='$status' WHERE post_id='$post_id'");
    		if ($update) {
    			$_SESSION['errorMSG']='<font color="green">Update Successfully</font>';
				header("location: ../publish-post.php?updateID=".$post_id."");    		    
    		}else{
    			$_SESSION['errorMSG']='<font color="red">Update failed</font>';
				header("location: ../publish-post.php?updateID=".$post_id."");
    		}
    	}  	
    }
}


if (isset($_POST['addCate'])) {
	$cateName = mysqli_real_escape_string($conn, $_POST['cateName']);
	$cateType = mysqli_real_escape_string($conn, $_POST['cateType']);

	$query = mysqli_query($conn, "INSERT INTO `cate_manager`(`cate_name`,`cate_for`,`date`)VALUES('$cateName','$cateType',now())");
	if ($query) {
		$_SESSION['errorMSG']='<font color="green">Added Successfully</font>';
		header("location: ../cate-manager.php");		
	}else{
		$_SESSION['errorMSG']='<font color="red">Added fail</font>';
		header("location: ../cate-manager.php");
	}

}

if (isset($_GET['delCate'])) {
	$delCate = mysqli_real_escape_string($conn, $_GET['delCate']);

	if (!empty($delCate)) {
		$query = mysqli_query($conn, "DELETE FROM cate_manager WHERE id='$delCate' LIMIT 1");
		if ($query) {
			$_SESSION['errorMSG']='<font color="green">Delete Successfully</font>';
			header("location: ../cate-manager.php");
		}else{
			$_SESSION['errorMSG']='<font color="red">Delete failed</font>';
			header("location: ../cate-manager.php");
		}
		
	}else{
		$_SESSION['errorMSG']='<font color="red">Select right one</font>';
		header("location: ../cate-manager.php");
	}

}

if (isset($_POST['editCate_BTN'])) {
	$editCateID = mysqli_real_escape_string($conn, $_POST['editCate_BTN']);
	$cateName = mysqli_real_escape_string($conn, $_POST['cateName']);
	$cateType = mysqli_real_escape_string($conn, $_POST['cateType']);

	$query = mysqli_query($conn, "UPDATE `cate_manager` SET `cate_name`='$cateName',`cate_for`='$cateType' WHERE id='$editCateID'");
	if ($query) {
		$_SESSION['errorMSG']='<font color="green">Update Successfully</font>';
		header("location: ../cate-manager.php");		
	}else{
		$_SESSION['errorMSG']='<font color="red">Update fail</font>';
		header("location: ../cate-manager.php");
	}
}

if (isset($_GET['cmtApp'])) {
	$cmtID = mysqli_real_escape_string($conn, $_GET['cmtApp']);

	if (!empty($cmtID)) {
		$query = mysqli_query($conn, "UPDATE `comments` SET `status`='1' WHERE id='$cmtID' LIMIT 1");
		if ($query) {
			$_SESSION['errorMSG']='<font color="green">Approved Successfully</font>';
			header("location: ../all-comments.php");			
		}else{
			$_SESSION['errorMSG']='<font color="red">Approved failed</font>';
			header("location: ../all-comments.php");
		}
		
	}else{
		$_SESSION['errorMSG']='<font color="red">Select right one</font>';
		header("location: ../all-comments.php");
	}
}

if (isset($_GET['delCMT'])) {
	$delCmtID = mysqli_real_escape_string($conn, $_GET['delCMT']);

	if (!empty($delCmtID)) {
		$query = mysqli_query($conn, "DELETE FROM `comments` WHERE id='$delCmtID' LIMIT 1");
		if ($query) {
			$_SESSION['errorMSG']='<font color="green">Delete Successfully</font>';
			header("location: ../all-comments.php");			
		}else{
			$_SESSION['errorMSG']='<font color="red">Delete failed</font>';
			header("location: ../all-comments.php");
		}
		
	}else{
		$_SESSION['errorMSG']='<font color="red">Select right one</font>';
		header("location: ../all-comments.php");
	}


}



?>