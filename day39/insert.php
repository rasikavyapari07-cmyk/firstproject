<?php
$server="localhost";
$user="root";
$password="";
$db="hotel";
$conn = mysqli_connect($server, $user, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$checkin=$_GET['checkin'];
$checkout=$_GET['checkout'];
$roomtype=$_GET['roomtype'];
$guests=$_GET['number of guest'];
$sql = "INSERT INTO service (name, email, phone ,checkin,checkout, roomtype,numberofguest)
VALUES ('$name', '$email','$phone','$checkin','$checkout','$roomtype','$numberofguest')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>