<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form action="signup_process.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br><br>

        <!-- Add field for last name -->
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br><br>

        <!-- Add field for phone number -->
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" required><br><br>

        <!-- Add field for city -->
        <label for="city">City:</label>
        <input type="text" name="city" id="city" required><br><br>

        <!-- Add field for Google Maps location URL -->
        <label for="location">Google Maps Location URL:</label>
        <input type="url" name="location" id="location" placeholder="Enter Google Maps URL" required><br><br>
        
        <input type="submit" value="Signup">
    </form>
</body>
</html>
