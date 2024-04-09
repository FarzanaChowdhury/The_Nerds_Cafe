
<?php

SESSION_START();
require("include/db-conn.php");


if (isset($_GET['search'])) {
  $search = mysqli_real_escape_string($conn, $_GET['search']);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Blogs</title>
    
    <?php include("include/header.php"); ?>
    <center style="margin-top: 1rem;"><strong>
                <?php
                if (isset($_SESSION['errorMSG'])) {
                    echo $_SESSION['errorMSG'];
                    unset($_SESSION['errorMSG']);
                }

                ?>
    </strong></center>
<section class="container-fluid mt-3 p-5">
  <h1 style="text-align: center; " class="mr-5 mb-5">All Posts</h1>
  <div class="row">

    <?php

    if (isset($_GET['search'])) {
      $query = mysqli_query($conn, "SELECT * FROM all_posts WHERE (title LIKE '%$search%' OR cate LIKE '%$search%' OR content LIKE '%$search%') AND status='1'");
    }else{
      $query = mysqli_query($conn, "SELECT * FROM all_posts WHERE status='1'");
    }
    
    $checkQuery = mysqli_num_rows($query);
    if ($checkQuery) {
      while ($row = mysqli_fetch_array($query)) {     

     ?>

    

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $row['banner'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title'] ?></h5>
          <p class="card-text"><?php echo $row['describ'] ?></p>
          <a href="single-post.php?slug=<?php echo $row['slug'] ?>" class="btn btn-primary">Read More</a>
        </div>
      </div>      
    </div>
    <?php

      }
    }else{
      echo "Post Are not Available";
    }


    ?>
    
  </div>   
</section>

<div style="height:2.9rem">

</div>

<?php include("include/footer.php"); ?>