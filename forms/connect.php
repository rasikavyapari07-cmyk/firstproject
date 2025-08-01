<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dms";  // Replace with your actual DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: set charset to utf8mb4 for proper encoding support
$conn->set_charset("utf8mb4");
?>
