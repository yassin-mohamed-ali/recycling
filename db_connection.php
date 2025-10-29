<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "recycling_new";

$conn = mysqli_connect($servername, $username ,$password, $database);

// Check connection
if (!$conn) {
    die("Connection failed to data base");
}
?>
