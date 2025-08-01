<?php
// Step 1: Include your DB connection
include 'connectionnn.php'; // Make sure this file has $conn

// Step 2: Check if form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Step 3: Collect & sanitize form data
    $campaign_name = mysqli_real_escape_string($conn, $_POST['campaign_name']);
    $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);
    $goal = mysqli_real_escape_string($conn, $_POST['goal']);

    // Step 4: Prepare insert query
    $sql = "INSERT INTO seo_campaign (campaign_name, keywords, goal)
            VALUES ('$campaign_name', '$keywords', '$goal')";

    // Step 5: Execute and handle response
    if (mysqli_query($conn, $sql)) {
        echo "SEO campaign submitted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Step 6: Close DB
    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
