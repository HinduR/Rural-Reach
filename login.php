<?php
include './config.php';
//    $servername = "localhost";
//    $username = "root";
//    $password = "";
//    $dbname = "miniproject";
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Get input data
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to fetch user from database
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    header("Location: syllabus.php");
} else {
    // Invalid credentials, redirect back to login page with error message
    header("Location: login.html?error=invalid_credentials");
}

$conn->close();
?>
