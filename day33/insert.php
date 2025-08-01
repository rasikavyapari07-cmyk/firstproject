<?php
$server="localhost";
$user="root";
$password="";
$db="customerdetails";
$conn = mysqli_connect($server, $user, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$address=$_GET['address'];
$sql = "INSERT INTO register( name, address, phone, email)
VALUES ('$name', '$address','$phone','$email')";
if (mysqli_query($conn,$sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>