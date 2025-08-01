<?php
$server="localhost";
$user="root";
$password="";
$db="digital marketing";
$conn = mysqli_connect($server, $user, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$fullname=$_GET['FullName'];
$email=$_GET['EmailAddress'];
$username=$_GET['Username'];
$password=$_GET['Password'];
$registration_date=$_GET['registration_date'];
$sql = "INSERT INTO registration(fullname, emailaddress, username, password, registration date)
VALUES ( '$fullname', '$emailaddress','$username','$password','$registration_date')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>