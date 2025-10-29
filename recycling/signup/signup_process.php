<?php
// Include the connection file
include("connection.php");

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$city = $_POST['city'];

// Hash the password for security (assuming you're using password_hash() for hashing)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO users (first_name, last_name, email, username, password, phone_number, city) 
        VALUES ('$first_name', '$last_name', '$email', '$username', '$hashed_password', '$phone_number', '$city')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
