<?php
$hostname='localhost';
$username='azure';
$password='password';
$dbname='sarah';
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
