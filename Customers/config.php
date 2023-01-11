<?php
   // $con=mysqli_connect("localhost","root","","customer");
   // $conn=mysqli_connect("localhost","root","","icargo");
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "icargopacific_db";
// Create connection
$con = new mysqli($hostname, $username, $password, $databasename);
// Check connection
if ($con->connect_error) {
    die("Unable to Connect database: " . $con->connect_error);
}
?>