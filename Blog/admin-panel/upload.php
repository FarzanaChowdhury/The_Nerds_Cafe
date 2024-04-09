<?php
if(isset($_FILES['upload']['name']))
{
	$file=$_FILES['upload']['name'];
	$filetmp=$_FILES['upload']['tmp_name'];
	$rand_name = rand(00000000,99999999);

	$exp = explode(".",$file);
    $exten = end($exp);

	move_uploaded_file($filetmp,'../images/blog-images/'.$rand_name.'.'.$exten);
	$function=$_GET['CKEditorFuncNum'];
	$url='http://localhost/blog/images/blog-images/'.$rand_name.'.'.$exten;
	$msg='';
	echo "<script>window.parent.CKEDITOR.tools.callFunction('".$function."','".$url."','".$msg."');</script>";     
}


?>