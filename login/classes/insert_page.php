
<?php





$con=mysqli_connect("localhost","root","db_login","login");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$html = mysqli_real_escape_string($con, $_POST['html']);
$link = mysqli_real_escape_string($con, $_POST['link']);



$sql="INSERT INTO pages (name,html,link)
VALUES ('$name','$html','$link')";

$content = ("$html");

$myfile = fopen("$name", "w") or die("Unable to open a new file!");
$txt = "$content\n";
fwrite($myfile, $txt);
fclose($myfile);

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
header("Location: /login/pages.php");
die();
?>