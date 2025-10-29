<?php
session_start(); // Start session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit(); // Stop further execution
}

// Include database connection
include 'db_connection.php';

// Task creation functionality
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];
    $task_location = $_POST['task_location'];
    $task_reward = $_POST['task_reward'];

    // Validate form data (Optional, but recommended)
    // Example: Check if required fields are not empty

    if (empty($task_name) || empty($task_description) || empty($task_location) || empty($task_reward)) {
        // Handle validation errors (e.g., display error message to the user)
        echo "<script>alert('All fields are required');</script>";
    } else {
        // Insert task into the database
        $stmt = $conn->prepare("INSERT INTO tasks (task_name, task_description, task_location, task_reward) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $task_name, $task_description, $task_location, $task_reward); // "s" for string, "i" for integer

        if ($stmt->execute() === TRUE) {
            // Task added successfully
            echo "<script>alert('Task added successfully');</script>";
            // Redirect to a page showing the newly added task or any other appropriate page
            header("Location: tasks.php");
            exit();
        } else {
            // Error adding task
            echo "<script>alert('Error adding task: " . $stmt->error . "');</script>";
        }

        $stmt->close();
    }
}

// Close database connection
$conn->close();
?>
