<?php
// Step 1: Include your database connection
include 'connectionnn.php'; // Adjust path as needed

// Step 2: Check if form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Step 3: Collect and sanitize form data
    $campaign_name = mysqli_real_escape_string($conn, $_POST['campaign_name']);
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $budget = $_POST['budget'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Step 4: Prepare SQL Insert Query
    $sql = "INSERT INTO camp (
                campaign_name, start_date, end_date, budget, description
            ) VALUES (
                '$campaign_name', '$start_date', '$end_date', $budget, '$description'
            )";

    // Step 5: Execute query and give feedback
    if (mysqli_query($conn, $sql)) {
        echo "Campaign created successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Step 6: Close the connection
    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>
