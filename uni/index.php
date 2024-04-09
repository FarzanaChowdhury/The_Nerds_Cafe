<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Login As Teacher/Student";
	  $color="green";
}
?>
<!DOCTYPE html>

<html lang="en">
   
    <head>
        <meta charset="UTF-8">
	      <script src="source/js/loginValidate.js"></script>
          <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" href="iutResult.css">
		 
        <title>Nerd's Cafe University Repository</title>
    


        <!-- <div class="yellow_darkbg">
        <div class="amarbalertitle" style="background: #f8c659";>
        <div class="container">
           <div class="row">
           
              <div class="col-md-12">
                
                <h2 style="font-size: 45px";>Nerd's Cafe University Repository</h2>
                 </div>
              </div>
           </div>
        </div>
     </div> -->
    </head>
    <body class="main-layout inner_header">
    <header>
      <!-- header inner -->
      <div class="header">
        <div class="container">
          <div class="row rowRepo" style=" margin-left: -150px">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo" style="align:center">
                    <a href="../index.html"
                      ><img id="logoRepo" src="source/NerdsCafeRepo.png" alt="#" style="max-width:250%"
                    /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
              <nav class="navigation navbar navbar-expand-md navbar-dark" style="">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarsExample04"
                  aria-controls="navbarsExample04"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="../index.html">Home</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="../contact.php">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>


	<section class="balamar" 
    style="
    min-height: 700px;
     background-size: 100% 100%;
     display: flex;
     justify-content: center;
     align-content: center;
     align-items: center;
     position: relative;
    ";>
			<center>
                <div class="logo">
	          <img src="source/hat.png" style="width:100px;height:100px;"/>
</div>
	          <hr/>
            <?php echo "<font size='4' color='white'>$login_message</font>";?>
            <section class="forms-section">
         <!-- <h1 class="section-title">Animated Forms</h1> -->
         <div class="forms">
            <form  action="service/check.access.php" onsubmit="return loginValidate();" method="post"><br/>
                
                <input type="text" class="form-control" id="myid" name="myid" placeholder="Login ID" autofocus=""   />
               

               
                <input type="password" class="form-control" id="mypassword" name="mypassword" placeholder="Password"  />
              

                
                <input type="submit" class="btn" value="Login" style="background-color: #02246A; color:white; margin : 10px"/>
            </form>

        </center>
	
    </body>
</html>
