<?php
// Include the DB connection file
include 'connect.php';

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get and sanitize form data
    $fullname = trim($_POST['fullname']);
    $emailaddress = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $registration_date = $_POST['registration_date'];

    // Optional: basic validation
    if (empty($fullname) || empty($emailaddress) || empty($username) || empty($password) || empty($registration_date)) {
        die("All fields are required.");
    }

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO enquiries (fullname, emailaddress, username, password, registrationdate) VALUES (?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters (s = string)
    $stmt->bind_param("sssss", $fullname, $emailaddress, $username, $hashed_password, $registration_date);

    // Execute and check result
    if ($stmt->execute()) {
        echo "<script>alert('Enquiry Submitted Successfully'); window.location.href='view_enquiry.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
