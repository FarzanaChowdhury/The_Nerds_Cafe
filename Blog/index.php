
<?php

SESSION_START();
require("include/db-conn.php");


?>

<!doctype html>
<html lang="en">
  <head>

    <title>Blogs</title>
    <style>
        .navbar-custom {
          background-color: #02246a;
        }
        .setColor {
          background-color: #ffca56;
        }
    </style>
    <?php include("include/header.php"); ?>
    
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/photos/photo3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/photos/photo5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/photos/photo6.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<section class="container-fluid mt-3 my-3">
  <center><h2 class="my-5">All Blogs</h2></center>
  <div class="row">

    <?php

    $query = mysqli_query($conn, "SELECT * FROM all_posts WHERE status='1'");
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
          <a href="single-post.php?slug=<?php echo $row['slug'] ?>" class="btn btn-primary navbar-custom">Read More</a>
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

<section class="container p-5">
  <center><h2>Contact Us</h2></center>
  <center><strong>
    <?php

    if (isset($_SESSION['errorMSG'])) {
      echo $_SESSION['errorMSG'];
      unset($_SESSION['errorMSG']);
    }

    ?>
  </strong></center>
  <form class="form-group" action="include/function.php" method="post">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Name" name="cntName" required>
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Email Address" name="cntEmail" required>
    <label>Message</label>
    <textarea class="form-control" placeholder="Type Message Here.." name="cntMSG" required></textarea>
    <center><button class="btn btn-success setColor mt-2" name="cntBTN">Send <i class="fa fa-send"></i></button></center>   
  </form>  
</section>

<?php include("include/footer.php"); ?>