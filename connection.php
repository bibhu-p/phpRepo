<?php
$serverName = "localhost";
$username = "root";
$password = "root@123";
$dbname = "studentDB";
$conn = mysqli_connect($serverName, $username, $password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>