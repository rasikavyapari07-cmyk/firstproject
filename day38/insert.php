<?php
$server="localhost";
$user="root";
$password="";
$db="digital marketing";
$conn = mysqli_connect($server, $user, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$course=$_GET['course'];
$experience=$_GET['experience'];
$sql = "INSERT INTO login(name, email, phone, course, experience)
VALUES ( '$name', '$email','$phone','$course','$experience')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>