<?php
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Registration form
					</span>
				</div>

				<form class="login100-form validate-form" action="registration.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password_1" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Re-enter Password</span>
						<input class="input100" type="password" name="password_2" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter email" required>
						<span class="focus-input100"></span>
					</div>


				 <div class="flex-sb-m w-full p-b-30">
					<!--	<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div> -->

						<div>
							<a href="index.php" class="txt1">
								Click here if you already registered before
							</a>
						</div>
					</div> 

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Register">	

					</div>
				</form>
			</div>
		</div>
	</div>

	<?php
 	  /* $username = $_POST['username'];
	  $email = $_POST['email'];
	  $password_1 = $_POST['password_1'];
	  $password_2 = $_POST['password_2'];

	  if (condition) {
	  	# code...
	  }*/
	  error_reporting(0);
	 $username = isset($_POST['username']) ? $_POST["username"] : "";
	  $email = isset($_POST['email']) ? $_POST['email'] : "";
	  $password_1 = isset($_POST['password_1']) ? $_POST['password_1'] : "" ;
	  $password_2 = isset($_POST['password_2']) ? $_POST['password_2'] : "" ;
  		
  		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
  		}

/* 
  $user_check_query = "SELECT username,email FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
    array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email) {
     array_push($errors, "email already exists");
    }
  } */

  	$password = md5($password_1);
  	$query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
  	$q = mysqli_query($con, $query);
  	error_reporting();
  	if ($q==true) {
  		//echo "<br><center>Registration Success !!!</center><br><br><br>";
  		//error_reporting(0);
  		header("location: index.php");
  	}
  	session_destroy();
    mysqli_close($con);
	 ?>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jvs/main.js"></script>
</body>
</html>