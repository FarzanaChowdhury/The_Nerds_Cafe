<?php

SESSION_START();

if (isset($_SESSION['LoggedIN'])) {
	header("location: index.php");
}


?>

<!DOCTYPE html>
<html>
    
<head>
	<title>Admin Login</title>
	<!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
	<!-- <link rel="icon" href="img/favicon.ico" type="image/x-icon"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<link rel="stylesheet" href="css/loginForm.css">
	<style>
      .navbar-custom {
            background-color: white;
        }
        .setColor {
          background-color: #ffca56;
        }
    </style>
</head>

<body class="navbar-custom">
	<div class="container h-100 navbar-custom">
		<div class="d-flex justify-content-center h-100 navbar-custom">
			<div class="user_card">
				<div class="d-flex justify-content-center navbar-custom">
					<div class="brand_logo_container">
						<img src="img/user.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container ">
					<form action="include/function.php" method="post">
						<center>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control input_user" name="uName" id="uName" placeholder="Email Address">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control input_pass" name="pwd" id="pwd" placeholder="Password">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
				 		<button class="btn login_btn" name="loginBTN" id="loginBTN">LOGIN</button>
				   		</div>
				   		<div class="d-flex justify-content-center mt-3 login_container ">
				   		<center><strong id="errorMsg">
				   			<?php

				   			if (isset($_SESSION['errorMSG'])) {
				   				echo $_SESSION['errorMSG'];
				   				unset($_SESSION['errorMSG']);
				   			}

				   			?>
				   		</strong></center>
				   		</div>
				   	</center>
				   </form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
