<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
    <style>
      .navbar-custom {
            background-color: #02246a;
        }
        .setColor {
          background-color: #ffca56;
        }
    </style>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light pt-4 pb-4 navbar-custom">
  <a class="navbar-brand text-white" href="#">Blogs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="all-posts.php">All Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="publish_post.php">Write Post</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="admin-panel/index.php"><i class="fas fa-user"></i></i></a>
      </li>
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> -->

          <?php

          $cateQuery = mysqli_query($conn, "SELECT * FROM cate_manager WHERE cate_for LIKE '%menu%'");
          $checkCate = mysqli_num_rows($cateQuery);
          if ($checkCate) {
            while ($cRow = mysqli_fetch_array($cateQuery)) {

          ?>
          <a class="dropdown-item" href="all-posts.php?search=<?php echo $cRow['cate_name']; ?>"><?php echo $cRow['cate_name']; ?></a>
          <?php
              
            }
          }

          ?>
          
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="all-posts.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
      <button class="btn btn-outline-success text-white my-2 my-sm-0 setColor" type="submit">Search</button>
    </form>
  </div>
</nav>