<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Best Website Ever">
    <meta name="author" content="">

    <title>Successful</title>

    <!-- Bootstrap core CSS -->
    <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--========================================== Boot Strap Icons ======================================================-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom fonts for this template -->
    <link href="home/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--========================================== Font Awesome lates version ======================================================-->
    <script src='https://use.fontawesome.com/release/v6.3.0/js/all.js' crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap');
</style> 

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

    <link href="css/mine.css" rel="stylesheet">

    <link href="css/full-slider.css" rel="stylesheet">


  </head>

  <?php

include('db.php');

$var=$_GET['var'];
$_SESSION['a'][10]=$_GET['var'];
	
$name=$_SESSION['a'][0];
$password=$_SESSION['a'][1];
$realname=$_SESSION['a'][2];
$email=$_SESSION['a'][3];
$phone=$_SESSION['a'][4];
$image1=$_SESSION['a'][5];
$frag1=$_SESSION['a'][6];
$image2=$_SESSION['a'][7];
$frag2=$_SESSION['a'][8];
$image3=$_SESSION['a'][9];
$frag3=$_SESSION['a'][10];

$query="INSERT into user(username,password,name,email,phone,image1,frag1,image2,frag2,image3,frag3,userimage) 
values('$name','$password','$realname','$email',$phone,'$image1','$frag1','$image2','$frag2','$image3','$frag3','../user/images/user/default.png')";
$result=mysqli_query($con, $query);

?>

  <body id="page-top">

<?php include 'use/nav0.php';

    ?>
<?php include 'use/header.php';

    ?>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="font-family: 'Lobster Two', cursive">Registration Successful!!!</h2>
            <h3 class="section-subheading text-muted">Welcome</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-user-alt fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="../login/index.html" style="font-family: 'Lobster Two', cursive">Login</a></h4>
            <p class="text-muted">Click to proceed to the homepage for Login.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/uth.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/cc.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/zr.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/3.jpeg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

<?php include 'use/footer.php';

    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="home/vendor/jquery/jquery.min.js"></script>
    <script src="home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="home/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="home/js/jqBootstrapValidation.js"></script>
    <script src="home/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="home/js/agency.min.js"></script>

    <!-- Google API Script-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>


  </body>

</html>

