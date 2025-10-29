<?php
include 'db_connection.php';

// Payment functionality
if (isset($_POST['card_info'])) {
    // Retrieve form data
    $amount = $_POST['amount'];
    $card_number = $_POST['card_number'];
    $card_expiry = $_POST['card_expiry'];
    $card_cvv = $_POST['card_cvv'];
    $cardholder_name = $_POST['cardholder_name'];

    // Validate and process payment...
    
    // Simulate payment success for demonstration purposes
    $payment_success = true;
    if ($payment_success) {
        // Insert payment details into the database
        $stmt = $conn->prepare("INSERT INTO payments (amount, card_number, card_expiry, card_cvv, cardholder_name) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("dssss", $amount, $card_number, $card_expiry, $card_cvv, $cardholder_name); // "d" for double/decimal, "s" for string

        if ($stmt->execute() === TRUE) {
            echo "<script>alert('Payment recorded successfully');</script>";
        } else {
            echo "<script>alert('Error recording payment: " . $stmt->error . "');</script>";
        }

        $stmt->close();
    } else {
        // Payment failed
        echo "<script>var errorMessage = 'Payment failed. Please check your card details and try again.';</script>";
        echo "<script>document.addEventListener('DOMContentLoaded', function() { showPopup(); });</script>";
    }

    // Close database connection
    $conn->close();
}
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Planet Protectors</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: ;
        }
        .inpt[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .inpt[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .inpt[type="submit"]:hover {
            background-color: #45a049;
        }


        footer{
            position: absolute;
            top: 170%;
        }
        .cntr {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 30%;
            left: 25%;
        }

    </style>
            <script>
    function addSlash(input) {
    // Check if input length is 2
    if (input.value.length == 2) {
      // Append "/" after the second character
      input.value += "/";
    }
  }
</script>
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
    <div class="cntr">
        <h1>Payment Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/mastercard-logo.svg.png" alt="Mastercard" style="width: 10%;">&nbsp;<img src="images/Visa_Inc._logo.svg.webp" alt="Visa" style="width: 10%;">&nbsp;<img src="images/kisspng-american-express-insurance-credit-card-payment-mon-visa-5ad1f773ea99e1.7534420515237098119609.jpg" alt="American Express" style="width: 10%;"></h1>
        <form action="#" method="post">
            <label for="cardholder">Cardholder Name:</label>
            <input type="text" id="cardholder" name="cardholder" required class="inpt">

            <label for="cardnumber">Card Number:</label>
            <input type="text" id="cardnumber" name="cardnumber"  class="inpt" pattern="[0-9]{16}" title="Please enter a valid 16-digit card number" required>

            <label for="expdate">Expiration Date:</label>
            <input type="text" id="expdate" name="expdate"  class="inpt" placeholder="MM/YYYY" pattern="(0[1-9]|1[0-2])\/[0-9]{4}" title="Please enter a valid expiration date in MM/YYYY format" required oninput="addSlash(this)">

            <label for="cvv">CVV:</label>
            <input type="number" id="cvv" name="cvv"  class="inpt" min="100" max="999" required>

            <label for="payment-method">Payment Method:</label>
            <select id="payment-method" name="payment-method" required>
                <option value="visa">Visa</option>
                <option value="mastercard">Mastercard</option>
                <!-- Add other payment methods here -->
            </select>

            <input type="submit" value="Pay Now">
        </form>
    </div>
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