<?php
session_start(); // Start the session to manage login state

// Database connection
$servername = "localhost"; // your server
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "library"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    // Query the database for the user
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE student_id = ?");
    $stmt->bind_param("s", $student_id);
    $stmt->execute();
    $stmt->store_result();
    
    // Check if a user with the given student_id exists
    if ($stmt->num_rows > 0) {
        // Bind result to variables
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Start a session and set user data
            $_SESSION['user_id'] = $id;
            $_SESSION['student_id'] = $student_id;
            
            // Redirect to home page if login is successful
            header("Location: user.php");
            exit();
        } else {
            // If password is incorrect, redirect with an error
            header("Location: login.php?error=true");
            exit();
        }
    } else {
        // If student_id does not exist, redirect with an error
        header("Location: login.php?error=true");
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="userlogin.css">
</head>
<body>
    <div class="container">
        <h1>LIBRARY</h1>

        <?php if (isset($_GET['error'])): ?>
            <p class="error-message">Invalid credentials, please try again.</p>
        <?php endif; ?>

        <form action="login.php" method="POST" id="loginForm">
            <div class="form-group">
                <i class="fas fa-id-card"></i>
                <input type="text" id="student_id" name="student_id" placeholder="Student ID" required>
            </div>
            <div class="form-group">
                <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <a href="forgot-password.html" class="link">Forgot Password?</a>
            <button type="submit" class="btn">Login</button>
            <a href="register.php" class="link">Don't have an account? Register</a>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleIcon = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }
    </script>
</body>
</html>
