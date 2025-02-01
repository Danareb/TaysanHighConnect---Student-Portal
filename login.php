<?php
session_start();

$host = 'localhost';
$user = 'root'; // Default MySQL username for XAMPP
$password = ''; // Default MySQL password for XAMPP
$dbname = 'taysenhigh';

// Database connection
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevent SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query to check if the username exists
    $sql = "SELECT * FROM users2 WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Compare plain text passwords
        if ($password == $row['password']) {
            // Password is correct, login successful
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header('Location: homepage.php'); // Redirect to homepage
            exit();
        } else {
            // Incorrect password
            echo "Incorrect username or password.";
        }
    } else {
        // Username not found
        echo "Incorrect username or password.";
    }
}
$conn->close();
?>
