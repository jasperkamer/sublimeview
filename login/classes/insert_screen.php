<?php
$con=mysqli_connect("localhost","root","db_login","login");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$location = mysqli_real_escape_string($con, $_POST['location']);

$sql="INSERT INTO screens (name, location)
VALUES ('$name', '$location')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
header("Location: /login/screens.php");
die();
?>