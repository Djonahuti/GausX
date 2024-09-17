<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ux/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ux/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ux/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ux/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ux/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ux/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ux/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ux/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ux/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ux/css/util.css">
	<link rel="stylesheet" type="text/css" href="ux/css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	
.login100-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 300%;
  background: #fed136;
  background: -webkit-linear-gradient(bottom, #fec91b, #fedb67);
  background: -o-linear-gradient(bottom, #fec301, #fed54d);
  background: -moz-linear-gradient(bottom, #fec91b, #fee180);
  background: linear-gradient(bottom, #fed136, #fee180);
  bottom: -100%;
  left: 0;}

.login100-more::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #fec180;
  background: -webkit-linear-gradient(bottom, #fec91b, #fedb67);
  background: -o-linear-gradient(bottom, #fec810, #fed54d);
  background: -moz-linear-gradient(bottom, #fec91b, #fee180);
  background: linear-gradient(bottom, #fed136, #fee180);
  opacity: 0.8;
}

</style>

</head>

<?php
include("db.php");
$name=$_SESSION['uname'];
$result=mysqli_query($con,"select username,name,email,phone,userimage from user where username='$name'");
		if (mysqli_num_rows($result)>0)
		{
		$row=mysqli_fetch_array($result);
		$uname=$name;
		$rname=$row[1];
		$email=$row[2];
		$phone=$row[3];
		$userpic=$row[4];
		}
?>

<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('../images/cover.jpg');">
					<br><br><span class="login100-form-title p-b-59">
          <center><?php echo $rname; ?></center>
					</span>
					<center><img class="im" src=<?php echo $userpic; ?> height="200" width="180"></center></div>

<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Username</span>
						<h2 class="input100"> <?php echo $uname; ?></h2>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Email</span>
						<h2 class="input100"> <?php echo $email; ?></h2>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Phone Number</span>
						<h2 class="input100">+234 <?php echo $phone; ?></h2>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Update Profile</span>
						<h4 class="input100">
				      <a href="../update_DisplayPicture/index.html" style="color:#001a00">Change Profile Picture</a><br>
				      <a href="../update_Profile/index.html"  style="color:#001a00">Change Profile Details</a><br><br><br>
            </h4>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Update Passwords</span>
						<h4 class="input100">
              <a href="../update_GausX/index.html"  style="color:#001a00">Change Graphical Password</a><br>
              <a href="../update_TXpassword/index.html"  style="color:#001a00">Change Text Password</a><br>
            </h4>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="button" onclick="window.location.href = 'logout.php'">
								Log Out
							</button>
						</div>

						<a href="index.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Home Page
							<i class="bi bi-arrow-right-circle-fill"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
  <!--===============================================================================================-->
    <script src="ux/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
    <script src="ux/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
    <script src="ux/vendor/bootstrap/js/popper.js"></script>
    <script src="ux/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
    <script src="ux/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
    <script src="ux/vendor/daterangepicker/moment.min.js"></script>
    <script src="ux/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
    <script src="ux/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
    <script src="ux/js/main.js"></script>
  
  </body>
  </html>