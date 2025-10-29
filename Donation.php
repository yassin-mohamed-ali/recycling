<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Planet Protectors</title>
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Donation
			</h1>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active">Donation</li>
			</ol>
		</div>

		<div class="Donation-box">
		<!-- Content Row -->
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<h3 class="card-header">Eco Champion</h3>
						<div class="card-body">
							<div class="display-4">$20.00</div>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Become a Green Supporter and make a positive impact on the environment with your $20 donation. Every contribution helps us in our mission to solve climate change.</li>
							<li class="list-group-item">
							<a href="payment.php" class="btn btn-primary">save The Environment!</a>
						  </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card card-outline-primary h-100">
						<h3 class="card-header">
							Eco Champion
							<span class="most_popular">Most Popular</span>
						</h3>
						<div class="card-body">
							<div class="display-4">$40.00</div>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Step up your commitment and become an Eco Champion with a $40 donation. Your increased support allows us to contribute to solving climate change and brings us one step closer to a greener world.</li>
							<li class="list-group-item">
							<a href="payment.php" class="btn btn-primary">Sustain A Greener Future!</a>
						  </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<h3 class="card-header">Environmental Steward</h3>
						<div class="card-body">
							<div class="display-4">$160</div>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">For those truly dedicated to the cause, become an Environmental Steward with a generous $160 donation. Your support at this level helps us, leaving a lasting legacy for future generations.</li>
							<li class="list-group-item">
							<a href="payment.php" class="btn btn-primary">Fight Climate Change!</a>
						  </li>
						</ul>
					</div>
				</div>
			</div>
		<!-- /.row -->
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
