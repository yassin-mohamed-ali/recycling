<?php
include 'db_connection.php';

// Calculate total rewards that the user hasn't claimed yet
session_start();
if(isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    // Using the correct column names for user ID and claimed status
    $sql = "SELECT SUM(task_reward) AS total_reward FROM rewards WHERE user_id = $userId AND claimed = 0";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $totalReward = $row['total_reward'];
} else {
    $totalReward = 0;
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
<!-- </head>
<body>
    <!-- Your navigation and other HTML content here -->

    <!-- Button to add a task -->
    <!-- <?php
    // // Check if the user is logged in
    // if(isset($_SESSION['user_id'])) {
    //     echo '<a href="tasks.php" class="btn btn-primary" id="addTaskBtn">Add Task</a>';
    // }
    // ?>

    <div class="task-card" style="height: 30vh">
        <div class="task-details">
            <center>
                <div class="task-name" style="font-size: 25px;"><?php echo $totalReward; ?> EGP</div>
                <form action="payment.php" method="POST">
                    <input type="radio" name="method" id="Mastercard" value="Mastercard" style="cursor: pointer;">
                    <label for="Mastercard" style="font-size: 25px;">Mastercard</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="method" id="Visa" value="Visa" style="cursor: pointer;">
                    <label for="Visa" style="font-size: 25px;">Visa</label>
                    <button type="submit" class="help-out-btn" style="font-size: 25px;">Claim</button>
                    <input type="hidden" name="total_reward" value="<?php echo $totalReward; ?>">
                </form>
            </center>
        </div>
    </div> --> -->

    <!-- Your footer content here -->
<!-- </body>
</html> --> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Find Climate Change Tasks</title>
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="css/all.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tasks.css">
    <style>
        .footer{
            top: 100% !important;
        }
    </style>
</head>
<body>
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

    <center>
    <h1>Get Your Rewards</h1>

    <!-- Button to add a task -->
    <?php
    // Check if the user is logged in
    if(isset($_SESSION['user_id'])) {
        echo '<a href="tasks.php" class="btn btn-primary" id="addTaskBtn">Add Task</a>';
    }
    ?>

        <div class="task-card" style="height: 30vh">
            <div class="task-details">
            <center>
                <div class="task-name" style="font-size: 25px;"><?php echo $totalReward; ?> EGP</div>
                <form action="payment.php" method="POST">
                    <input type="radio" name="method" id="Mastercard" value="Mastercard" style="cursor: pointer;">
                    <label for="Mastercard" style="font-size: 25px;">Mastercard</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="method" id="Visa" value="Visa" style="cursor: pointer;">
                    <label for="Visa" style="font-size: 25px;">Visa</label>
                    <button type="submit" class="help-out-btn" style="font-size: 25px;">Claim</button>
                    <input type="hidden" name="total_reward" value="<?php echo $totalReward; ?>">
                </form>
            </center>
            </div>
        </div>
    </div>
    </center>
    
    <!-- Footer -->
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
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
