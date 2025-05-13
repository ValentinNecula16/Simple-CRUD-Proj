<?php
$dbhost = "localhost";   // sau "localhost"
$dbUser = "root";
$dbPass = "";
$dbName = "crud";
$dbPort = 3307;          // portul tău real, confirmat în XAMPP

$conn = mysqli_connect($dbhost, $dbUser, $dbPass, $dbName, $dbPort);

if (!$conn) {
    die("Something went wrong: " . mysqli_connect_error());
}
?>
