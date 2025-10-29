<?php
session_start(); // Start session

// Check if the user is logged in
if(!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit(); // Stop further execution
}

include 'db_connection.php';

// Task creation functionality
if (isset($_POST['tasks'])) {
    // Retrieve form data
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];
    $task_location = $_POST['task_location'];
    $task_reward = $_POST['task_reward'];
    $task_expiration = $_POST['task_expiration']; // Add this line to retrieve expiration date

    // Insert task into the database
    $stmt = $conn->prepare("INSERT INTO tasks (task_name, task_description, task_location, task_reward, task_expiration, creation_date) VALUES (?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("sssis", $task_name, $task_description, $task_location, $task_reward, $task_expiration); // "s" for string, "i" for integer

    if ($stmt->execute() === TRUE) {
        echo "<script>alert('Task added successfully');</script>";
    } else {
        echo "<script>alert('Error adding task: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Protectors</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Tasks</title>
    
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="css/all.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tasks.css">
    <style>
        .footer{
            position: static !important;
            margin-top: 7% !important;
        }
    </style>
</head>

<body><center>
    <!-- <button id="addTaskBtn" onclick="toggleTaskForm()" style="margin-top: 8%;">Add Task</button> -->

    <div class="task-form" style="background-color: white; width: 20%; border-radius: 10%; padding: 10px; margin-top: 7%;"> <center>
        <h2>Add Task</h2>
        <form id="taskForm" method="post" action="process_task.php">
            <label for="taskName">Task Name:</label><br>
            <input type="text" id="taskName" name="task_name" required><br>

            <label for="taskDescription">Task Description:</label><br>
            <textarea id="taskDescription" name="task_description" required></textarea><br>

            <label for="taskLocation">Task Location:</label><br>
            <input type="text" id="taskLocation" name="task_location" required><br>

            <label for="taskReward">Task Reward:</label><br>
            <input type="number" id="taskReward" name="task_reward" required><br>

            <label for="taskExpiration">Task Expiration Date:</label><br>
            <input type="date" id="taskExpiration" name="task_expiration" required><br>

            <button type="submit" style="width: 80%; margin-top: 5%">Submit</button>
        </form></center>
    </div></center>

    <script>
        function toggleTaskForm() {
            var taskForm = document.querySelector('.task-form');
            if (taskForm.style.display === 'none') {
                taskForm.style.display = 'block';
            } else {
                taskForm.style.display = 'none';
            }
        }
    </script>
    <h1>Public Tasks</h1>
    <div id="tasks-container">
        <?php include 'display_tasks.php'; ?>
    </div>

</body>
</html>


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


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
