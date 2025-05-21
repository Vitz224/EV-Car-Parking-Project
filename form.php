
<?php

include("test.php");



$username = $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];

if (!$conn) {
  die("Connection faild: " . mysqli_connect_error());
}
$sql="INSERT INTO signin(username,email,password) VALUES('$usename', '$email', '$password');";

if (mysqli_query($conn,$sql)) {
 header("Location: Login.php");
}else echo"error";

mysqli_close($conn);
?>