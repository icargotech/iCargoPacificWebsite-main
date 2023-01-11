<?php
   // $con=mysqli_connect("localhost","root","","customer");
   // $conn=mysqli_connect("localhost","root","","icargo");
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "icargopacific_db";
// Create connection
$conn = new mysqli($hostname, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Unable to Connect database: " . $conn->connect_error);
}
?>