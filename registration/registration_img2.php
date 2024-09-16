<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
      
      <script>
      // passing the selected image reference to frag the image
      function changeIt(img)
      {
            var name = img.src;
            console.log(name);
            window.location.href = "reg_frag2.php?var="+name; 
      }
      </script>
      
</head>

<?php
$var=$_GET['var'];
$_SESSION['a'][6]=$_GET['var'];	
$_SESSION['layer2']=$_GET['var'];
?>

<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('../images/cover.jpg');"></div>

<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
<!-- signup form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
			<div class="login_info">
				<h1>Phase Four</h1>
				<p class="account1">Select the 2nd image for the graphical password.</p>
				<center>
				<img class="im" src="..\images\pw\image1.jpg" onclick="changeIt(this)" height="120" width="120">
				<img class="im" src="..\images\pw\image2.jpg" onclick="changeIt(this)" height="120" width="120">
				<img class="im" src="..\images\pw\image3.jpg" onclick="changeIt(this)" height="120" width="120">
				<img class="im" src="..\images\pw\image4.jpg" onclick="changeIt(this)" height="120" width="120">
				<img class="im" src="..\images\pw\image5.jpg" onclick="changeIt(this)" height="120" width="120">
				</center>
			</div>
		</div>
	</div>
</div>
	
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
	<script src="js/main.js"></script>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>