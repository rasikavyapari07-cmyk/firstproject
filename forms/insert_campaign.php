<?php
// Step 1: Include your database connection
include 'connectionn.php'; // Adjust path as needed

// Step 2: Check if form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Step 3: Collect and sanitize form data
    $campaign_name = mysqli_real_escape_string($conn, $_POST['campaign_name']);
    $report_date = $_POST['report_date'];
    $impressions = $_POST['impressions'];
    $clicks = $_POST['clicks'];
    $conversions = !empty($_POST['conversions']) ? $_POST['conversions'] : 'NULL';
    $cost = $_POST['cost'];
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);

    // Step 4: Prepare SQL Insert Query
    $sql = "INSERT INTO campaign_report (
                campaign_name, report_date, impressions, clicks, conversions, cost, notes
            ) VALUES (
                '$campaign_name', '$report_date', $impressions, $clicks, $conversions, $cost, '$notes'
            )";

    // Step 5: Execute query and give feedback
    if (mysqli_query($conn, $sql)) {
        echo "Campaign report submitted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Step 6: Close the connection
    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>
