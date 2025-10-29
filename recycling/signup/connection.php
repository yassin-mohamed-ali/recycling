<?php
// Database connection configuration
$host = 'localhost';
$username = 'username';
$password = 'password';
$database = 'signup';
$port = 3306;

// Create connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
