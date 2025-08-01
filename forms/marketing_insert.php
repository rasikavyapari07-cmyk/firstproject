<?php
// Include database connection file
include 'connection.php'; // Ensure $conn is defined

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect data from form
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $marketing_choice = $_POST['marketing_choice'];

    // Insert into the correct table: selection
    $sql = "INSERT INTO selection (full_name, email, marketing_choice)
            VALUES ('$full_name', '$email', '$marketing_choice')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        echo "Marketing enquiry submitted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>
