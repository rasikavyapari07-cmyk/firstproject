<?php
$server="localhost";
$user="root";
$password="";
$db="jk";
$conn = mysqli_connect($server, $user, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$courseid=$_GET['ID'];
$name=$_GET['Name'];
$courseDuration=$_GET['duration'];
$coursefees=$_GET['Fees '];
$course=$_GET['Course'];
$sql = "INSERT INTO details( ID, Name, duration, fees , Category)
VALUES ('$ID', '$Name','$duration','$fees','$Category')";
if (mysqli_query($conn,$sql)) {
  echo " New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>