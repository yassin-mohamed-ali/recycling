<?php
include 'db_connection.php';

// Login functionality
if(isset($_POST['login'])) {
    if(isset($_POST['email_or_username']) && isset($_POST['password'])) {
        $email_or_username = $_POST['email_or_username'];
        $password = $_POST['password'];
        
        // Redirect or perform any other action after successful login
        $sql = "SELECT * FROM `users` WHERE (user_username='$email_or_username' OR user_email='$email_or_username') AND user_password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "Login successful<br>";
            // Echo all user data
        } else {
            echo "Username or email not found";
        }
    } else {
        echo "Username or password not set";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
    <div class="form-group">
        <label for="email_or_username">email_or_username:</label>
        <input type="text" id="email_or_username" name="email_or_username" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <button type="submit" name="login">Log In</button>
    </form>
</body>
</html>