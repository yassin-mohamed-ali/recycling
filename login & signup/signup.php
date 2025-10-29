<?php
include 'db_connection.php';

// Retrieve cities organized by state
$sql = "SELECT * FROM cities ORDER BY state, city";
$result = $conn->query($sql);

$cities_by_state = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $state = $row["state"];
        $city = $row["city"];
        $cities_by_state[$state][] = $city;
    }
}

// Signup functionality
if(isset($_POST['signup'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password for security
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $city = $_POST['city'];
    $age = $_POST['date_of_birth'];
    $creation_date = $_POST['creation_date'];
    
    // Check if the username is already taken
    $sql = "SELECT user_id FROM users WHERE user_username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Username already exists";
    } else {
        $sql = "INSERT INTO users (user_first_name, user_last_name, user_username, user_password, user_email, user_phone_number, user_city, user_age, user_creation_date) 
                VALUES ('$first_name', '$last_name', '$username', '$password', '$email', '$phone_number', '$city', '$age', '$creation_date')";
        if ($conn->query($sql) === TRUE) {
            echo "Signup successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Planet Protectors</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/signup.css">
  <style>
    .terms-checkbox {
        display: flex;
        align-items: center;
    }

    .terms-checkbox input[type="checkbox"] {
        margin-right: 5px; /* Adjust as needed */
        width: 10%;
        margin-left: 0;
    }
    #termsandconditionslabel{
        width: 20vw;
        margin-right: 0;
    }
  </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container" >
            <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="logo"  class="logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
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
                        
                        <a class="dropdown-item" href="Donation.php">Donation</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Join Us
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                       <a class="dropdown-item" href="signup.php">Sign Up</a>
                       <a class="dropdown-item" href="login.php">Log In</a>
                    </div>
                 </li>
                 <li class="nav-item" style=" position: relative; bottom: 10%;">
                  <a class="nav-link" href="profile.php"><img src="images/blank-profile-picture-973460_960_720.webp" alt="Profile Picture" style="width: 70%; border-radius: 10%;"></a>
               </li>
               </ul>
            </div>
        </div>
    </nav>
  <div class="signup-container">
    <h2>Sign Up</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="first_name" required>
      </div>

      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="last_name" required>
      </div>

      <div class="form-group">
        <label for="Username">Username:</label>
        <input type="Username" id="Username" name="username" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
      </div>
      
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="PhoneNumber">Phone Number:</label>
        <input type="PhoneNumber" id="PhoneNumber" name="phone_number" required>
      </div>

      <div class="form-group">
        <label for="City">City:</label>
        <select id="City" name="city" required>
            <option value="">Select City</option>
            <?php
            // Loop through the cities organized by state and populate the dropdown
            foreach ($cities_by_state as $state => $cities) {
                echo "<optgroup label='$state'>";
                foreach ($cities as $city) {
                    echo "<option value='$city'>$city</option>";
                }
                echo "</optgroup>";
            }
            ?>
        </select>
      </div>
      
      <div class="form-group">
        <label for="DateOfBirth">Date Of Birth:</label>
        <input type="date" id="DateOfBirth" name="date_of_birth" required>
      </div>
      
      <div class="form-group">
        <label for="CreationDate">Creation Date:</label>
        <input type="date" id="CreationDate" name="creation_date" required>
      </div>
      
      <div class="form-group">
        <div class="terms-checkbox">
            <label for="termsAndConditions" id="termsandconditionslabel">I agree to the <a href="terms_and_conditions.html" target="_blank">Terms and Conditions</a></label>
            <input type="checkbox" id="termsAndConditions" name="termsAndConditions" required>
        </div>
      </div>

      <button type="submit" name="signup">Sign Up</button>
    </form>
  </div>

  <footer class="footer" style="position: absolute; top: 150%;">
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
