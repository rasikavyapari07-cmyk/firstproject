<?php
session_start();
session_unset();
session_destroy();
header("Location: index1.php"); // Redirect to your login page
exit();
?>
