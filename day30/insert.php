<?php
$server="localhost";
$user="root";
$password="";
$db="customerdetails";
$conn = mysqli_connect($server, $user, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO customer( id ,name, address, phone, email, course)
VALUES ('2','dhanshree', 'vashind', '987625437','dhanshree@example.com','WEB')";

if (mysqli_query($conn,$sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>