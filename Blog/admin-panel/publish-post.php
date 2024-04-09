<?php

SESSION_START();
require("include/db-conn.php");

if (!isset($_SESSION['LoggedIN'])) {
    header("location: login.php");
}


if (isset($_GET['updateID'])) {
    
    $updateID = mysqli_real_escape_string($conn, $_GET['updateID']);

    $query = mysqli_query($conn, "SELECT * FROM `all_posts` WHERE post_id='$updateID' LIMIT 1");
    $checkQuery = mysqli_num_rows($query);
    if ($checkQuery) {
        while ($row = mysqli_fetch_array($query)) {
            $title = $row['title'];
            $cate = $row['cate'];
            $slug = $row['slug'];
            $content = $row['content'];
            $describ = $row['describ'];
            $keyword = $row['keyword'];
            $status = $row['status'];
        }
        
    }else{
        $_SESSION['errorMSG']='<font color="red">Please select Right post</font>';
        header("location: all-posts.php");
    }
}


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Publish Post | ChandanCodes</title>

    <?php include("include/header.php"); ?>
    
        <!-- Mobile Menu end -->
        

        <div class="container-fluid" style="background-color: white;">

            <center style="margin-top: 1rem;"><strong>
                <?php
                if (isset($_SESSION['errorMSG'])) {
                    echo $_SESSION['errorMSG'];
                    unset($_SESSION['errorMSG']);
                }

                ?>
            </strong></center>

            <form class="form-group" method="post" action="include/function.php" enctype="multipart/form-data">

                <?php

                if (isset($_GET['updateID'])) {
                    echo '<input type="hidden" name="post_id" value="'.$updateID.'">';
                }

                ?>

                
                
                <div>
                    <label for="title">Post Title</label><br>
                    <input class="form-control" type="text" class="form-control" id="title" name="title" placeholder="Post Title" aria-describedby="basic-addon2" value="<?php if (isset($_GET['updateID'])) { echo $title; } ?>">
                </div><br>

                <label for="slug">Post Slug</label><br>
                <input class="form-control" type="text" class="form-control" id="slug" name="slug" placeholder="Post Slug" value="<?php if(isset($_GET['updateID'])){ echo $slug; } ?>"><br>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="ckeditor/ckeditor.js"></script>
                
                <label for="post_Content">Write your Content</label><br>
                <textarea name="post_Content" id="post_Content" rows="30" cols="80">
                    <?php
                        if(isset($_GET['updateID'])){
                            echo $content;
                        }
                    ?>
                        
                </textarea>
                <script>
                    CKEDITOR.replace( 'post_Content', {
                       extraPlugins: 'filebrowser',
                       filebrowserBrowseUrl: 'browser.php?type=Images',
                       filebrowserUploadMethod: 'form',
                       filebrowserUploadUrl: 'upload.php',
                       
                    });                    
                </script>


                <br><br>
                <label class="btn btn-success" for="fileUpload">Upload Thumbnail</label>
                <input id="fileUpload" name="FileUpload" type="file" style="display: none;">
                <br><br>

                <label for="cate">Category</label>
                <select name="cate" id="cate" class="form-control">
                    <?php
                        if(isset($_GET['updateID'])){
                            echo '<option value="'.$cate.'">'.$cate.'</option>';
                        }else{
                            echo '<option>----Select Category-----</option>';
                        }
                    ?>
                    
                    <option value="php">PHP</option>
                    <option value="wordpress">WordPress</option>
                    <option value="javascript">JavaScript</option>
                    <option value="bootstrap">Bootstrap</option>

                </select><br>

                <label for="describ">Short Description</label><br>
                <textarea class="form-control" id="describ" name="describ" rows="5" cols="60" placeholder="Enter Short Description"> <?php if(isset($_GET['updateID'])){ echo $describ; } ?></textarea><br>

                <label for="keyword">Keywords [ ', ' ]</label><br>
                <input class="form-control" type="text" name="keyword" id="keyword" placeholder="keywords ', ' " value="<?php if(isset($_GET['updateID'])){ echo $keyword; } ?>"><br>

                <label for="status">Status</label><br>
                <select name="status" id="status" class="form-control">
                    <option>----Select Status-----</option>
                            <option value="1">Active</option>
                            <option value="0">inactive</option>
                    
                </select>

                <?php
                    if(isset($_GET['updateID'])){
                        echo '<center><button class="btn btn-success mt-2" name="updatePost" style="margin-top: 2rem;">UPDATE NOW</button></center>';
                    }else{
                        echo '<center><button class="btn btn-success mt-2" name="publish_new" style="margin-top: 2rem;">PUBLISH NOW</button></center>';
                    }
                ?>
                
            </form>             
        </div>

<?php include("include/footer.php"); ?>
            
        