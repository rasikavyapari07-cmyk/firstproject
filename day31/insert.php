<?php
$server="localhost";
$user="root";
$password="";
$db="v2v";
$conn = mysqli_connect($server, $user, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$address=$_GET['address'];
$gender=$_GET['gender'];
$course=$_GET['course'];
$sql = "INSERT INTO registration( name, address, phone, email, course,gender)
VALUES ('$name', '$address','$phone','$email','$course','$gender')";
if (mysqli_query($conn,$sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>