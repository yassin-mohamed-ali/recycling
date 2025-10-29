<?php
    // Get values passed from the form in login.php file 
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // To prevent SQL injection 
    $username = stripslashes($username);
    $password = stripslashes($password);

    // Connect to the server and select the database 
    $conn = new mysqli("localhost", "root", "", "login");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query the database for the user 
    $result = $conn->query("SELECT * FROM users WHERE username = '" . $conn->real_escape_string($username) . "' AND password = '" . $conn->real_escape_string($password) . "'");

    if (!$result) {
        die("Failed to query database: " . $conn->error);
    }

    $row = $result->fetch_assoc();

    if ($row && $row['username'] == $username && $row['password'] == $password) {
        echo "Login successful. Welcome " . $row['username'];
    } else {
        echo "Failed to login";
    }

    // Close the database connection when done
    $conn->close();
?>
