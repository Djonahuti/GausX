<?php
session_start();
ob_start();
?>

<html>
<head>

      <title>Register</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
    
      <link rel="stylesheet" href="css/style-footer.css">
	<link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>
      
      <script src="js/frag2.js"></script>

</head>

<?php
	$var=$_GET['var'];
	$_SESSION['a'][7]=$_GET['var'];	
       $_SESSION['layer3']=$_GET['var'];
?>

<body>


<!-- signup form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<div class="left_grid_info">
					<h1>Registration Phase5</h1>
					<p>With the Help of Graphical Authentication, you're safe.</p><br>
					<img class="im1" src="../images/cover.jpg" height="270" width="370">
				</div>
			</div>
			<div class="login_info">
				<h2>Phase Five</h2>
				<p class="account1">Following is the 2nd image you chose.</p>
                <img src=<?php echo $var; ?> onload="changeIt(this)" height="100" width="100">
                <p class="account">Select one from below four parts.</p>
				<center><div class="test" id="test"></div></center>
			</div>
		</div>
	</div>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="js/script.js"></script>
</body>

</html>

