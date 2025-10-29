<!DOCTYPE html>
<html lang="en">
<head>
   <!-- meta data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
   <!-- /meta data -->
   <!-- title -->
	<title>Planet Protectors</title>
   <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <style>@media screen and (min-width: 1024px){
      .card{
    width: 100%;
      }
      #end-card{
         
         margin-left: 100%;
      }
   }

   </style>
</head>
<body>
<?php
session_start();
?>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="logo" class="logo">
        </a>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="beggining-nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="tasks.php">Find Tasks</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="faq.php">FAQ</a>
                        <a class="dropdown-item" href="donation.php">Donation</a>
                        <a class="dropdown-item" href="rewards.php">Rewards</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    ';
                } else {
                    echo '
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Log In</a>
                        </li>
                    ';
                }
                ?>
                <li class="nav-item" style=" position: relative; bottom: 10%;">
                    <a class="nav-link" href="profile.php"><img src="images/blank-profile-picture-973460_960_720.webp" alt="Profile Picture" style="width: 70%; border-radius: 10%;"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- /navigation-->
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Planet Protectors</h3>
                     <p>Combat climate change, recycle for a greener tomorrow!</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Planet Protectors</h3>
                     <p>Combat climate change, recycle for a greener tomorrow!</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Planet Protectors</h3>
                     <p>Combat climate change, recycle for a greener tomorrow!</p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Our Services</h1>
            <!-- Services Section -->
            <div class="row">
               <div class="col-lg-4 mb-4">
                   <div class="card h-100">
                       <h4 class="card-header">Planting</h4>
                       <div class="card-img">
                           <img class="img-fluid" src="images/services-img-02.jpg" alt="Planting Image" />
                       </div>
                       <div class="card-body">
                           <p class="card-text">Contribute to the green revolution by participating in tree planting initiatives. Help create a greener and healthier environment for future generations.</p>
                       </div>
                       <div class="card-footer">
                           <a href="tasks.php" class="btn btn-primary">Learn More</a>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 mb-4">
                   <div class="card h-100" id="end-card">
                       <h4 class="card-header">Recycling</h4>
                       <div class="card-img">
                           <img class="img-fluid" src="images/services-img-03.jpg" alt="Recycling Image" />
                       </div>
                       <div class="card-body">
                           <p class="card-text">Be part of the solution by actively participating in recycling programs. Reduce waste and promote sustainability for a cleaner and healthier planet.</p>
                       </div>
                       <div class="card-footer">
                           <a href="tasks.php" class="btn btn-primary">Learn More</a>
                       </div>
                   </div>
               </div>
           </div>
           
            <!-- /.row -->
        </div>
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Welcome to <a href="#">Planet Protectors</a></h2>
                  <p>As <a href="#">Planet Protectors</a>, our goal is to combat climate change through recycling, planting, and various other initiatives.</p>
                  <h5>Our smart approach</h5>
                  <ul>
                     <li>Assigning climate-friendly tasks to individuals to contribute to addressing climate change.</li>
                     <li>Rewarding individuals who actively tackle the issue through our website with thoughtful gifts.</li>
                     <li>Promoting awareness about the issue.</li>
                  </ul>
                  <p>Our mentioned smart approach actively contributes to addressing climate change.</p>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="images/about-img.jpg" alt="" >
               </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->

        <hr>
        <!-- Get In Touch Now Section -->
        <div class="row mb-4">
            <div class="col-md-8">
               <p>For assistance or more information on addressing climate change, feel free to reach out to us here.</p>
            </div>
            <div class="col-md-4">
               <a class="btn btn-lg btn-secondary btn-block" href="contact.php">Get In Touch Now</a>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
					<!--headin5_amrc-->
					<p><i class="fa fa-location-arrow"></i><a href="https://maps.google.com" target="_blank"> xxxxxxxxxx </a></p>
					<p><i class="fa fa-phone"></i> +20-xxxxxxxxxx </p>
					<p><i class="fa fa fa-envelope"></i> protectorsplanet23@gmail.com </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p> On Twitter <a href="https://www.twitter.com" target="_blank">https://www.Twitter.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a>
							<p>On Facebook<a href="https://www.facebook.com" target="_blank"> https://www.facebook.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-youtube fleft padding-right"></i> </a>
							<p>On Youtube<a href="https://www.youtube.com" target="_blank"> https://www.youtube.com/</a></p>
						</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Get In Touch</a></li>
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
				
			</div>
		</div>
        <div class="container">
            <div class="footer-logo">
				<a href="#"><img src="images/logo.png" alt="" class="logo"></a>
			</div>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="copyright text-center">All Rights Reserved. &copy; 2024 <a href="#"><a href="#">Planet Protectors</a></a></p>
            <ul class="social_footer_ul">
				<li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        
    </footer>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>