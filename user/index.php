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

    <title>Jonah's GAUS</title>

    <!-- Bootstrap core CSS -->
    <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="home/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--========================================== Font Awesome lates version ======================================================-->
    <script src='https://use.fontawesome.com/release/v6.3.0/js/all.js' crossorigin="anonymous"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap');
</style> 

    <!-- Custom styles for this template -->
    <link href="home/css/agency.min.css" rel="stylesheet">

    <link href="home/css/mine.css" rel="stylesheet">

    <link href="home/css/full-slider.css" rel="stylesheet">


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

  <body id="page-top">

<?php include 'use/nav.php';

    ?>
<?php include 'use/header.php';

    ?>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="font-family: 'Lobster Two', cursive">Services</h2>
            <h3 class="section-subheading text-muted">My Services.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-square fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="#" style="font-family: 'Lobster Two', cursive">E-Commerce</a></h4>
            <p class="text-muted">Click to Check Out My E-Commerce Shopping Store, Get the best Price for all sort of items you need.<br/> Dream it! Shop it! Get it!</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-box fa-stack-2x text-primary"></i>
              <i class="fas fa-toolbox fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="#" style="font-family: 'Lobster Two', cursive">Accidental Damage Control/Repairs</a></h4>
            <p class="text-muted">Click For products Accidental Damage Protection Insurance.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-square fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop-code fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="#" style="font-family: 'Lobster Two', cursive">Web Developement<br/> Coming Soon....</a></h4>
            <p class="text-muted">Are You Interested in Owning Your Own Website? A Logo for Your Business? If You Are, Click Here to Get Basic Know How and Procedures. Get The Best Web Security Here.</p>
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
