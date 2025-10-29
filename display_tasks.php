<?php
include 'db_connection.php';

// Retrieve tasks from the database
$sql = "SELECT * FROM tasks ORDER BY task_creationdate DESC"; // Retrieve tasks in descending order of creation date
$result = $conn->query($sql);

// Check if there are tasks
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='task'>";
        echo "<h2>" . $row["task_name"] . "</h2>";
        echo "<p class='description'>Description: " . $row["task_description"] . "</p>";
        echo "<p class='location'>Location: " . $row["task_location"] . "</p>";
        echo "<p class='reward'>Reward: " . $row["task_reward"] . " EGP</p>"; // Concatenate "EGP" with reward
        echo "</div>";
    }
} else {
    echo "<p class='no-tasks'>No tasks found</p>";
}

// Close database connection
$conn->close();
?>
