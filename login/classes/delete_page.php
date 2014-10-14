
<?php
$con=mysqli_connect("localhost","root","db_login","login");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = mysqli_real_escape_string($con, $_POST['id']);
mysqli_query($con,"DELETE FROM pages WHERE id='$id'");


mysqli_close($con);
header("Location: /login/pages.php");
die();
?>