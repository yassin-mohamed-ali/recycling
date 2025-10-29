<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Planet Protectors</title>   <!-- Custom styles for this template -->

	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/contact.css" rel="stylesheet">
</head>
<?php
session_start();
?>
<!-- Navigation -->
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
			<h1 class="mt-4 mb-3">Contact</h1>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active">Contact</li>
			</ol>
		</div>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221040.83542231403!2d30.97162392274814!3d30.043654928067518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate%2C%20Egypt!5e0!3m2!1sen!2sus!4v1706688650745!5m2!1sen!2sus" width="600" height="450"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4 contact-right">
          <h3>Contact Details</h3>
          <p>
            xxxx xxxxxx xxxxx 
            <br>Cairo, Egypt
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: +20 xxxxxxxxxx
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="protectorsplanet23@gmail.com">protectorsplanet23@gmail.com
            </a>
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4 contact-left">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" ></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!--footer starts from here-->
  
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
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
</body>
</html>
