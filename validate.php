<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $conn = new mysqli("localhost", "root", "", "v2v");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT password FROM login WHERE username = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($db_password);
            $stmt->fetch();

            // If password is stored in plain text (not recommended)
            if ($password === $db_password) {
            $_SESSION['name'] = $username;
            $_SESSION['admin_logged_in'] = true;

            header("Location: index1.php");  // ✅ FIXED: redirect to dashboard
            exit();
          }else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }

        $stmt->close();
    } else {
        echo "SQL statement failed.";
    }

    $conn->close();
} else {
    echo "Please submit the form using the login page.";
}
?>
