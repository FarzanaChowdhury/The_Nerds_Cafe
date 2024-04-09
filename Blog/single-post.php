
<?php
SESSION_START();

require("include/db-conn.php");

if (isset($_GET['slug'])) {
  $slug = mysqli_real_escape_string($conn, $_GET['slug']);
  if (!empty($slug)) {
    $query = mysqli_query($conn, "SELECT * FROM all_posts WHERE slug='$slug' AND status='1'");
    $checkQuery = mysqli_num_rows($query);
    if ($checkQuery) {
      while ($row = mysqli_fetch_array($query)) {
        $post_id = $row['post_id'];
        $title = $row['title'];
        $cate = $row['cate'];
        $content = $row['content'];
        $describ = $row['describ'];
        $keywords = $row['keyword'];
        $date = $row['date'];
      }      
    }else{
      header("location: all-posts.php");
    }    
  }else{
    header("location: all-posts.php");
  }
}else{
  header("location: index.php");
}

?>

<!doctype html>
<html lang="en">
  <head>

  <title>Blogs</title>  

    <?php include("include/header.php"); ?>


<section class="container-fluid pl-5 mt-3">

  <h1><?php echo $title ?></h1>
  <p><span class="bg-secondary text-white"><?php echo $describ ?></span></p>
  <span class="mt-1">Date: <?php echo $date ?></span>
  <span class="mt-1"><?php echo $cate ?> / <?php echo $title ?></span>

  <div class="container p-3">
    <?php echo $content ?>    
    
  </div>  
</section>


<section class="container-fluid bg-light  p-2 mt-2">
  <h3 class="text-black ml-5">Leave a comment</h3>
  <center><strong>
    <?php

    if (isset($_SESSION['errorMSG'])) {
      echo $_SESSION['errorMSG'];
      unset($_SESSION['errorMSG']);
    }

    ?>
  </strong></center>
  <form class="form-group container" action="include/function.php" method="post">
    <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
    <input type="hidden" name="slug" value="<?php echo $slug ?>">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Name" name="cmtName" required>
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Email Address" name="cmtEmail" required>
    <label>Message</label>
    <textarea class="form-control" placeholder="Type Message Here.." name="cmtMSG" required></textarea>
    <center><button class="btn btn-warning text-white mt-2" name="cmtBTN">Comment <i class="fa fa-send"></i></button></center>
  </form>  
</section>
<div class="container mt-2">
  <h4>All Comments</h4>
  <div class="container">

    <?php

    $query = mysqli_query($conn, "SELECT * FROM comments WHERE post_id='$post_id' AND status='1'");
    $checkQuery = mysqli_num_rows($query);
    if ($checkQuery) {
      while ($cmtRow = mysqli_fetch_array($query)) {


    ?>

    <h6 class="mt-2"><?php echo $cmtRow['name'] ?></h6>
    <p class="text-secondary"><?php echo $cmtRow['message'] ?></p>

    <?php

      }
    }

    ?>
  </div>
  
</div>


<?php include("include/footer.php"); ?>