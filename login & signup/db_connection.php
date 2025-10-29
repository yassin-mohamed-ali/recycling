<?php
// Database connection
$servername = "localhost";
$username = "";
$password = "";
$database = "recycling_new";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
